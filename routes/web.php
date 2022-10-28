<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    // User::create([
    //     'name' => 'Admin',
    //     'email' => 'teste@gmail.com',
    //     'password' => Hash::make('123456')
    // ]);

    return redirect('/login');
});

Route::prefix('/login')->controller(LoginController::class)->group(function(){
    Route::view('/', 'login');
    Route::post('/', 'entrar');
});

Route::middleware('auth')->group(function () {
    Route::view('/home', 'welcome')->name('home');
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
