<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use function Symfony\Component\Mime\Header\all;

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
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user')->middleware('auth');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom')->middleware('auth');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout')->middleware('auth');

Route::get('/', App\Http\Livewire\Beginscherm::class)->name('beginpagina');

Route::group(['prefix' => 'bestemming', 'as' => 'bestemmingen.'], function () {
    Route::get('/', App\Http\Livewire\Bestemmingen::class)->name('bestemmingen');
    Route::get('/bekijken/{bestemming}', App\Http\Livewire\Bestemming\BestemmingBekijken::class)->name('bestemming-bekijken');
    Route::get('/boeken/{bestemming}', App\Http\Livewire\Bestemming\BestemmingReserveren::class)->name('bestemming-boeken');
    Route::get('/bewerken/{bestemming}', App\Http\Livewire\Bestemming\BestemmingWijzigen::class)->name('bestemming-bewerken')->middleware('auth');
});

Route::group(['prefix' => 'reis', 'as' => 'reizen.'], function () {
    Route::get('/', App\Http\Livewire\Reizen::class)->name('reizen');
    Route::get('/bekijken/{reis}', App\Http\Livewire\Reis\ReisBekijken::class)->name('reis-bekijken');
    Route::get('/boeken/{reis}', App\Http\Livewire\Reis\ReisReserveren::class)->name('reis-boeken');
    Route::get('/bewerken/{reis}', App\Http\Livewire\Reis\ReisWijzigen::class)->name('reis-bewerken')->middleware('auth');
});



