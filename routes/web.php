<?php

namespace App\Http\Controllers;
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
    return view ('more');
});

Route::get('/nombre',[Table1Controller::class,'create']);
Route::post('/nombre',[Table1Controller::class,'store'])->name('Table1.store');

Route::get('/num',[Table2Controller::class,'create']);
Route::post('/num',[Table2Controller::class,'store'])->name('Table2.store');

Route::get('/test',[Table3Controller::class,'create']);
Route::post('/test',[Table3Controller::class,'store'])->name('Table3.store');

