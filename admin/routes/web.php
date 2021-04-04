<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FormularioController;

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
})->middleware('auth');


Auth::routes();

Route::get('/productos', [App\Http\Controllers\HomeController::class, 'index'])->name('productos')->middleware('auth');
Route::post('/post', [HomeController::class,'post'])->name('post');

Route::get('paneles', [PanelController::class,'index'])->name('paneles.index')->middleware('auth');
Route::get('paneles/create', [PanelController::class,'create' ])->name('paneles.create')->middleware('auth');
Route::post('paneles',[PanelController::class,'store'])->name('paneles.store')->middleware('auth');
Route::get('paneles/{dato}', [PanelController::class,'show' ])->name('paneles.show')->middleware('auth');
Route::get('paneles/{dato}/edit',[PanelController::class,'edit'])->name('paneles.edit')->middleware('auth');
Route::put('paneles/{dato}',[PanelController::class,'update'])->name('paneles.update')->middleware('auth');
Route::delete('paneles/{dato}',[PanelController::class,'destroy'])->name('paneles.destroy')->middleware('auth');

Route::get('/users', [HomeController::class, 'users'])->name('users')->middleware('auth');
Route::get('usuarios', [UsuarioController::class,'index'])->name('usuarios.index')->middleware('auth');
Route::get('usuarios/create', [UsuarioController::class,'create' ])->name('usuarios.create')->middleware('auth');
Route::post('usuarios',[UsuarioController::class,'store'])->name('usuarios.store')->middleware('auth');
Route::get('usuarios/{usuario}', [UsuarioController::class,'show' ])->name('usuarios.show')->middleware('auth');
Route::get('usuarios/{usuario}/edit',[UsuarioController::class,'edit'])->name('usuarios.edit')->middleware('auth');
Route::put('usuarios/{usuario}',[UsuarioController::class,'update'])->name('usuarios.update')->middleware('auth');
Route::delete('usuarios/{usuario}',[UsuarioController::class,'destroy'])->name('usuarios.destroy')->middleware('auth');


Route::get('/solicitudes', [HomeController::class, 'solicitudes'])->name('solicitudes')->middleware('auth');
Route::get('formularios', [FormularioController::class,'index'])->name('formularios.index')->middleware('auth');
Route::get('formularios/create', [FormularioController::class,'create' ])->name('formularios.create')->middleware('auth');
Route::post('formularios',[FormularioController::class,'store'])->name('formularios.store')->middleware('auth');
Route::get('formularios/{formulario}', [FormularioController::class,'show' ])->name('formularios.show')->middleware('auth');
Route::get('formularios/{formulario}/edit',[FormularioController::class,'edit'])->name('formularios.edit')->middleware('auth');
Route::put('formularios/{formulario}',[FormularioController::class,'update'])->name('formularios.update')->middleware('auth');
Route::delete('formularios/{formulario}',[FormularioController::class,'destroy'])->name('formularios.destroy')->middleware('auth');

