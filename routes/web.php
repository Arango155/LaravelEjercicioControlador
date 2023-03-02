<?php

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
    return view('home');
});

Route::get('/pagina2', [\App\Http\Controllers\NombreController::class,  'pagina2'])->name('pagina2');
Route::get('/listaalumnos', [\App\Http\Controllers\NombreController::class,  'listaalumnos'])->name('listaalumnos');
