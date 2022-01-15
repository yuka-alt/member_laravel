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

Route::get('/index', [App\Http\Controllers\TaskController::class, 'index'])->name('user');
Route::get('/create', [App\Http\Controllers\TaskController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\TaskController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('update');
Route::post('/destroy/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('destroy');
