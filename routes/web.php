<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('facebook')->redirect();
// });

// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('facebook')->user();

//     // $user->token
// });


Route::get('login/{driver}', [LoginController::class, 'redirectToProvider']);
Route::get('login/{driver}/callback', [LoginController::class, 'handleProviderCallback']);