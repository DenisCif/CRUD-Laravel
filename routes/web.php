<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CRUDController;

// Route::get('/', function () {
//     return view('usuarios.index');
// });

Route::get('/prueba', [InicioController::class, 'index']);
Route::get('/', [CRUDController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [CRUDController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [CRUDController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{id}/edit', [CRUDController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [CRUDController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [CRUDController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/usuarios/search', [CRUDController::class, 'search'])->name('usuarios.search');
Route::get('/usuarios/{id}', [CRUDController::class, 'show'])->name('usuarios.show');
