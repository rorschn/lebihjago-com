<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AppController extends Controller
{
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
