<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use Illuminate\Support\Facades\Http;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $response = Http::withHeaders([
            'X-Api-Key' => env('LNBITS_ADMIN_KEY'),
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/usermanager/api/v1/users', [
            'wallet_name' => $request->name."'s Petty Cash",
            'user_name' => $request->name,
            'email' => $request->email,
        ]);

        if($response->successful()){
            
            $user = User::create([
                'lnbits_id' => $response["id"],
                'name' => $response["name"],
                'email' => $response["email"],
                'pc_wallet_id' => $response["wallets"]["0"]["id"],
                'pc_wallet_adminkey' => $response["wallets"]["0"]["adminkey"],
                'pc_wallet_inkey' => $response["wallets"]["0"]["inkey"],
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));
    
            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
            
        }else{
            print_r($response);
        }

        
    }
}
