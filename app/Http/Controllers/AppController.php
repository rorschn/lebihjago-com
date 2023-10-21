<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public function pettyCash()
    {
        $user = Auth::user();
        $response = Http::withHeaders([
            'X-Api-Key' => $user->pc_wallet_inkey,
            'Content-type' => 'application/json'
        ])->get('https://legend.lnbits.com/api/v1/wallet')->json();
        if($response){
            $data["lnbits_id"] = $user->pc_wallet_id;
            $data["inkey"] = $user->pc_wallet_inkey;
            $data["name"] = "Petty Cash";
            $data["balance"] = floor($response["balance"]/1000);

            // get rupiah price of sat
            $response = Http::withHeaders([
                'X-Api-Key' => env('LNBITS_ADMIN_KEY'),
                'Content-type' => 'application/json'
            ])->post('https://legend.lnbits.com/api/v1/conversion', [
                "from_" => "sat",
                "amount" => 1,
                "to" => "idr",
            ]);
            if($response->successful()){
                $data["balance_in_idr"] = floor($response["IDR"]*$data["balance"]); 
                return view('petty-cash', $data);
            }
        }
        print_r($response);
    }

    public function createInvoice(Request $request)
    {
        $input = $request->input();
        // create an invoice code
        $response = Http::withHeaders([
            'X-Api-Key' => $input["inkey"],
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/api/v1/payments', [
            "out" => false,
            "amount" => $input["amount"],
            "unit" => "sat",
            "memo" => $input["memo"]
        ])->json();
        if(!is_string($response)){
            return view("invoice-ready", $response);
        }else{
            print_r($response);
        }
    }

    public function sendSats(Request $request)
    {
        $input = $request->input();
        // create an invoice code
        $response = Http::withHeaders([
            'X-Api-Key' => $input["adminkey"],
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/api/v1/payments', [
            "out" => true,
            "bolt11" => $input["lnurl"]
        ])->json();
        if(!is_string($response)){
            // TO do bikin redirect-nya bisa conditional: dream / petty cash.
            if($input["is_pc"]){
                return redirect('petty-cash');
            }else{
                return redirect('dreams/'.$input["dream_id"]);
            }
            //
            print_r($response);
        }else{
            print_r($response);
        }
        
    }

    private function milisat_to_idr($milisat, $sat_in_idr)
    {
        return floor($sat_in_idr*$milisat/1000);
    }

    public function dashboard()
    {
        // get petty cash details
        $response = Http::withHeaders([
            'X-Api-Key' => Auth::user()->pc_wallet_inkey,
            'Content-type' => 'application/json'
        ])->get('https://legend.lnbits.com/api/v1/wallet')->json();
        $data["pc"] = $response;

        // get rupiah price
        $response = Http::withHeaders([
            'X-Api-Key' => env('LNBITS_ADMIN_KEY'),
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/api/v1/conversion', [
            "from_" => "sat",
            "amount" => 1,
            "to" => "idr",
        ]);
        $data["sat_in_idr"] = $response["IDR"];
        $data["pc"]["balance_idr"] = $this->milisat_to_idr($data["pc"]["balance"], $data["sat_in_idr"]);
        $data["pc"]["balance"] = floor($data["pc"]["balance"]/1000);

        $dreams = [];
        foreach(Auth::user()->dreams as $d){
            $response = Http::withHeaders([
                'X-Api-Key' => $d->inkey,
                'Content-type' => 'application/json'
            ])->get('https://legend.lnbits.com/api/v1/wallet')->json();
            $response["id"] = $d->id;
            $response["lnbits_id"] = $d->lnbits_id;
            $response["target"] = $d->target;
            $response["total_idr_saving"] = $d->total_idr_saving;
            $response["balance_in_idr"] = $this->milisat_to_idr($response["balance"], $data["sat_in_idr"]);
            $dreams[] = $response;
        }
        $data["dreams"] = $dreams;

        return view('dashboard', $data);
    }
}
