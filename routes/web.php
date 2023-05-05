<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Livewire\ListaPreturiMagazin;

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
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/materii-prime', \App\Http\Livewire\MateriiPrime::class)->name('materii-prime');
    Route::get('/preturi-servicii-productie', \App\Http\Livewire\PreturiServiciiProductie::class)->name('preturi-productie');
    Route::get('/lista-preturi-magazin', \App\Http\Livewire\ListaPreturiMagazin::class)->name('preturi-magazin');
    Route::get('/adauga-print-digital', \App\Http\Livewire\AdaugaPrintDigital::class)->name('adauga-print-digital');
    Route::get('/achizitie-hartie', \App\Http\Livewire\AchizitieHartie::class)->name('achizitie-hartie');

    Route::get('/print-digital', \App\Http\Livewire\PrintDigital::class)->name('print-digital');
    Route::get('/calculatoare/lemn', function () {
        return view('calculatoare.lemn');
        })->name('calculator-lemn');
});





require __DIR__.'/auth.php';


/* Sterge element pret din lista preturi */

