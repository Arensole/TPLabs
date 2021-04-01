<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/lab1', [\App\Http\Controllers\LabController::class, 'lab1Form'])->name('lab1');
Route::get('/lab2', [\App\Http\Controllers\LabController::class, 'lab2Form'])->name('lab2');

