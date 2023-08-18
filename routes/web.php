<?php

use Illuminate\Support\Facades\Route;
#use app\Http\Controllers\ContactController;
use App\Http\Controllers\ContactController;
use Jenssegers\Agent\Agent;
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
})->name('index');

Route::get('/quienes-somos', function () {
    $agent = new Agent();
    return view('quienes-somos', compact('agent'));
})->name('quienes-somos');

Route::get('/que-hacemos', function () {
    return view('que-hacemos');
})->name('que-hacemos');

Route::get('/nuestro-aliados', function () {
    $agent = new Agent();
    return view('nuestros-aliados', compact('agent'));
})->name('nuestro-aliados');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/quienes-somos#contacto', function () {
    return view('quienes-somos');
})->name('contacto');

Route::post('/contacto', 
    //'ContactController@contactPost'
    [ContactController::class, 'contactPost']
)->name('contactoPost');