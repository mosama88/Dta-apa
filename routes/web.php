<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Dashboard\GovernorateController;
use App\Http\Controllers\Dashboard\ProsecutionController;
use App\Http\Controllers\Dashboard\InternetLineController;
use App\Http\Controllers\Dashboard\RouterDeviceController;
use App\Http\Controllers\Dashboard\SwitchDeviceController;


Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth:admin', 'verified'])->name('dashboard.index');

Route::middleware('auth:admin')->name('dashboard.')->group(function () {

    Route::resource('/prosecutions', ProsecutionController::class);
    Route::resource('/governorates', GovernorateController::class);
    Route::resource('/internet_lines', InternetLineController::class);
    Route::resource('/router_devices', RouterDeviceController::class);
    Route::resource('/switch_devices', SwitchDeviceController::class);


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