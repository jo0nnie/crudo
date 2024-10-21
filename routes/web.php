<?php

use App\Http\Controllers\OrdenDeTrabajoController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('orden_de_trabajo/{id}/edit', [OrdenDeTrabajoController::class, 'edit'])->name('orden_de_trabajo.edit');
    Route::put('orden_de_trabajo/{id}', [OrdenDeTrabajoController::class, 'update'])->name('orden_de_trabajo.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::resource('/orden_de_trabajo', OrdenDeTrabajoController::class);
});

require __DIR__.'/auth.php';
