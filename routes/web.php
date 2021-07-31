<?php

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
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/{driver}', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('login/{driver}/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

// Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
// Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::resource('contact', \App\Http\Controllers\ContactController::class)->only(['index', 'store'])->names('contact');

Route::resource('users', \App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update'])->names('users');
Route::resource('roles', \App\Http\Controllers\RoleController::class)->names('roles');

Route::middleware(['auth:sanctum', 'verified', 'can:show dashboard'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
