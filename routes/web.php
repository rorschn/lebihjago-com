<?php

use App\Http\Controllers\DreamController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Dream;

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        return redirect('/dashboard');;
    }else{
        return view('auth.login');
    }
});

Route::get('/dashboard', [AppController::class, 'dashboard'])->middleware('auth', 'verified');

Route::get('petty-cash', [AppController::class, 'pettyCash'])->middleware('auth', 'verified');

Route::resource('dreams', DreamController::class)
    ->only(['create', 'store', 'show'])
    ->middleware(['auth', 'verified']);

Route::get('{id}/receive-sats',function($id){
    $data = [];
    $dream = Dream::where('lnbits_id', $id)->first();
    if($dream){
        $data = $dream;
    }else{
        $data["inkey"] = $id;
        $data["name"] = "Petty Cash";
        $data["is_pc"] = true;
    }
    return view('receive-sats', $data);
})->middleware(['auth', 'verified']);

Route::get('{id}/send-sats',function($id){
    $data = [];
    $dream = Dream::where('lnbits_id', $id)->first();
    if($dream){
        $data["adminkey"] = $dream->adminkey;
        $data["name"] = $dream->name;
        $data["dream_id"] = $dream->id;
    }else{
        $data["adminkey"] = Auth::user()->pc_wallet_adminkey;
        $data["name"] = "Petty Cash";
        $data["is_pc"] = true;
    }
    return view('send-sats', $data);
})->middleware(['auth', 'verified']);

Route::post('create-invoice',[AppController::class, 'createInvoice'])->middleware('auth', 'verified');
Route::post('send-sats',[AppController::class, 'sendSats'])->middleware('auth', 'verified');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
