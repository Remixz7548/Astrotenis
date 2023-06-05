<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
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
    return view('index');
})->middleware('auth');

Route::get('/Hombres', function () {
    return view('hombre');
})->middleware('auth');

Route::get('/Mujeres', function () {
    return view('mujer');
})->middleware('auth');

Route::get('/Niños', function () {
    return view('niño');
})->middleware('auth');

Route::get('/Lanzamientos', function () {
    return view('lanzamiento');
})->middleware('auth');

Route::get('/Login', function () {
    return view('Login');
})->name('login')->middleware('guest');

Route::get('/Recuperacion', function () {
    return view('cambiar-pass');
})->name('login.camiar')->middleware('guest');

Route::get('/Admin', function () {
    return view('admin');
})->middleware(['auth', 'admin']);

Route::get('/Mapa', function () {
    return view('mapa');
})->middleware('auth');

Route::post('/iniciosesion', 'App\Http\Controllers\LoginController@store')->name('iniciosesion.store');
Route::post('/registro', 'App\Http\Controllers\RegistroController@store')->name('registro.store');
Route::post('/cambio', 'App\Http\Controllers\UpdateController@store')->name('update.store');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
