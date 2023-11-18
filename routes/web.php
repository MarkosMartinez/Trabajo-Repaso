<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformeController;
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
    return view('welcome');
})->name('/');

Route::get('/dashboard', [DashboardController::class, 'view'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/informe/{id?}', [InformeController::class, 'verForm'])->middleware(['auth', 'verified'])->name('informe');
Route::post('/informe', [InformeController::class, 'procesarForm'])->middleware(['auth', 'verified'])->name('informe');
Route::delete('/informe/{formulario}', [InformeController::class, 'eliminarForm'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
