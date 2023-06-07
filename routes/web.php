<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AutoCompletedController;

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
    return view('auth.login');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/negara', [AutoCompletedController::class, 'funcnegara']);
Route::get('/barang', [AutoCompletedController::class, 'funcbarang']);

Route::get('/autocomplete-view', function () {
    return view('autocompleted');
});

Route::middleware('auth')->group(function () {
    Route::get('/biodata', [BiodataController::class, 'create'])->name('biodata.create');
    Route::post('/create-biodata', [BiodataController::class, 'store'])->name('biodata.store');
    Route::get('/get-data', [BiodataController::class, 'index'])->name('biodata.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
