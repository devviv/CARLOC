<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add-panier/{id}', [PanierController::class, 'addPanier'])->name('add_panier');

    Route::get('/payform/{id}', [CarController::class, 'payform'])->name('payform');
    Route::get('/abonnement-payform/{id}', [AbonnementController::class, 'abonnement_payform'])->name('abonnement_payform');

    Route::post('/payer', [PaiementController::class, 'store'])->name('payer');
    Route::post('/abonnement-payer', [AbonnementController::class, 'store'])->name('abonnement_payer');

    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');
    Route::get('/facture', [ReservationController::class, 'facture'])->name('facture');
});

Route::get('/', [CarController::class, 'index'])->name('index');
Route::get('/cars', [CarController::class, 'cars'])->name('cars');
Route::get('/tarifs', [CarController::class, 'tarifs'])->name('tarifs');
Route::get('/about', [CarController::class, 'about'])->name('about');
Route::get('/show-car/{id}', [CarController::class, 'show_car'])->name('show_car');
Route::get('/abonnement-show-car/{id}', [AbonnementController::class, 'abonnement_show_car'])->name('abonnement_show_car');
Route::get('/contact', [CarController::class, 'contact'])->name('contact');

Route::post('/search', [CarController::class, 'search'])->name('search');


//Panier
Route::get('/show-panier', [PanierController::class, 'index'])->name('show_panier');
Route::get('/delete-panier/{id}', [PanierController::class, 'destroy'])->name('delete_panier');

require __DIR__ . '/auth.php';
