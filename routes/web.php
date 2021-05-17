<?php

use App\Http\Livewire\Trips;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
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

Route::redirect('/', 'dashboard');

/**
 *
 *   App Routes
 *
*/
Route::middleware('auth')->group( function () {
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/trips', Trips::class)->name('trips');
    Route::get('/profile', Profile::class)->name('profile');
});

/**
*
*   Authentication
*
*/
Route::middleware('guest') ->group( function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});
