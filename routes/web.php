<?php

use App\Http\Controllers\admin\CardColorController;
use App\Http\Controllers\admin\MagicCardController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->name("admin.")->prefix("admin/")->group(
    function(){
        Route::get("/cards", [MagicCardController::class, "index"])->name("cards.index");
        Route::get("/colors", [CardColorController::class, "index"])->name("colors.index");
    }
);
