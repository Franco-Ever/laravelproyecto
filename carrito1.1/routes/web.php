<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
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


Route::get('carritos', [CarritoController::class,'index'])->name('carritos.index');
Route::get('carritos/create', [CarritoController::class,'create' ])->name('carritos.create');
Route::post('carritos',[CarritoController::class,'store'])->name('carritos.store');
Route::get('carritos/{carrito}', [CarritoController::class,'show' ])->name('carritos.show');
Route::get('welcome',[CarritoController::class,'welcome'])->name('welcome');

