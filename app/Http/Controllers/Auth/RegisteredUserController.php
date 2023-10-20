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
            'X-Api-Key' => '47fb61d3969d48fa9eeab4ce679da1d1',
            'Content-type' => 'application/json'
        ])->post('https://legend.lnbits.com/usermanager/api/v1/users', [
            'admin_id' => 'b7c9f5c06ab348c1908f4402ef786758',
            'wallet_name' => 'Petty Cash',
            'user_name' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($response->successful()){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }else{
            dd($response);
        }

        
    }
}
