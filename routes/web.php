<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ProfileController;
use App\Models\Mesa;
use App\Models\Orden;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    

});

Route::resource('categorias', CategoriaController::class);

Route::resource('ordens', OrdenController::class);

Route::resource('platos', PlatoController::class);

Route::resource('mesas', MesaController::class);


require __DIR__.'/auth.php';
