<?php

use App\Http\Controllers\shop\MainController;
use Illuminate\Support\Facades\Route;;

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

Route::get("/", [MainController::class, 'home'])->name('home');
Route::get("/produit/{id}", [MainController::class, 'produit'])->name('produit');
Route::get("/categorie/{id}",[MainController::class, 'vueCategory'])->name("voirCategorie");
Route::get("/tag/{id}",[MainController::class, 'vueTag'])->name("voirTag");

