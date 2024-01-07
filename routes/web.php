<?php

use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;
use App\Models\Tamu;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [TamuController::class, 'index'])->name('tamu.index');
Route::get('/create', [TamuController::class, 'create'])->name('tamu.create');
Route::post('/store', [TamuController::class, 'store'])->name('tamu.store');
Route::get('/edit/{id}', [TamuController::class, 'edit'])->name('tamu.edit');
Route::put('/update/{id}', [TamuController::class, 'update'])->name('tamu.update');
Route::delete('/destroy/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');
Route::get('/signature', [TamuController::class, 'signature'])->name('tamu.signature');
Route::post('/signature', [TamuController::class, 'upoad'])->name('signature.upload');