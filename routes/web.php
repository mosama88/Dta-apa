<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AdminController;


Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth:admin', 'verified'])->name('dashboard.index');

//--------------------- Auth
Route::middleware('auth:admin')->name('dashboard.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('logout', [AdminController::class, 'destroy'])
        ->name('logout');
});


//--------------------- Guest
Route::middleware('guest:admin')->group(function () {

    Route::get('login', [AdminController::class, 'create'])
        ->name('dashboard.login');

    Route::post('login', [AdminController::class, 'store']);
});

// require __DIR__ . '/auth.php';