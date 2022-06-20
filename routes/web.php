<?php

use App\Http\Controllers\LoginController;
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
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout')->middleware('auth');

Route::get('/', App\Http\Livewire\Beginscherm::class)->name('beginpagina');

Route::group(['prefix' => 'accommodatie', 'as' => 'accommodaties.'], function () {
    Route::get('/', App\Http\Livewire\Accommodaties::class)->name('accommodatie');
    Route::get('/bekijken/{bestemming}', App\Http\Livewire\Accommodatie\AccommodatieBekijken::class)->name('accommodatie-bekijken');
    Route::get('/boeken/{bestemming}', App\Http\Livewire\Accommodatie\AccommodatieReserveren::class)->name('accommodatie-boeken');
    Route::get('/bewerken/{bestemming}', App\Http\Livewire\Accommodatie\AccommodatieWijzigen::class)->name('accommodatie-bewerken')->middleware('auth');
});

Route::group(['prefix' => 'reis', 'as' => 'reizen.'], function () {
    Route::get('/', App\Http\Livewire\Reizen::class)->name('reizen');
    Route::get('/bekijken/{reis}', App\Http\Livewire\Reis\ReisBekijken::class)->name('reis-bekijken');
    Route::get('/boeken/{reis}', App\Http\Livewire\Reis\ReisReserveren::class)->name('reis-boeken');
    Route::get('/bewerken/{reis}', App\Http\Livewire\Reis\ReisWijzigen::class)->name('reis-bewerken')->middleware('auth');
});



