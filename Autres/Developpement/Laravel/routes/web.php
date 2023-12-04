<?php

use App\Http\Controllers\carController;
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

Route::get("/", [carController::class,"index"])->name("index");
Route::get("/cars", [carController::class,"cars"])->name("cars");
Route::get("/about", [carController::class,"about"])->name("about");
Route::get("/contact", [carController::class,"contact"])->name("contact");

Route::get("/show-car/{id}", [carController::class,"show_car"])->name("show_car");
