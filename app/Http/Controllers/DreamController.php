<?php

namespace App\Http\Controllers;

use App\Models\Dream;

use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class DreamController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('new-dream');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'target' => 'integer|min:1'
        ]);
        $validated["name"] = $request->name; 

        $response = Http::withHeaders([
            'X-Api-Key' => env('LNBITS_ADMIN_KEY'),
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/usermanager/api/v1/wallets', [
            'user_id' => Auth::user()->lnbits_id,
            'wallet_name' => $request->name
        ]);

        if($response->successful()){
            $validated["admin"] = $response["admin"];
            $validated["adminkey"] = $response["adminkey"];
            $validated["inkey"] = $response["inkey"];
            $validated["lnbits_id"] = $response["id"]; 
            $validated["total_idr_saving"] = 0;
        }else{
            echo "error from lnbits";
        }

        if($request->user()->dreams()->create($validated)){
            return redirect(RouteServiceProvider::HOME);    
        }else{
            echo "lnbits was okay, but dream couldn't be created.";
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Dream $dream)
    {
        $dream = Dream::find($dream)->firstOrFail();
        // udpate the recent balance
        $response = Http::withHeaders([
            'X-Api-Key' => $dream->inkey,
            'Content-type' => 'application/json'
        ])->get('https://legend.lnbits.com/api/v1/wallet')->json();
        $data["lnbits_id"] = $dream->lnbits_id;
        $data["inkey"] = $dream->inkey;
        $data["name"] = $response["name"];
        $data["balance"] = floor($response["balance"]/1000);
        $data["target"] = $dream->target;
        $data["total_idr_saving"] = $dream->total_idr_saving;

        // get rupiah price of sat
        $response = Http::withHeaders([
            'X-Api-Key' => env('LNBITS_ADMIN_KEY'),
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/api/v1/conversion', [
            "from_" => "sat",
            "amount" => 1,
            "to" => "idr",
        ]);
        $data["balance_in_idr"] = floor($response["IDR"]*$data["balance"]); 

        return view('dream', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dream $dream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dream $dream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dream $dream)
    {
        //
    }
}
