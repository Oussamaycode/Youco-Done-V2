<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {return view('auth.register');})->name('register');

// Route::middleware('auth')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admindashboard', [ProfileController::class, 'indexadmin'])->name('admindashboard');
    Route::get('/restaurateurdashboard', [ProfileController::class, 'indexrestaurateur'])->name('restaurateurdashboard');
    Route::get('/profile', [ProfileController::class, 'indexclient'])->name('profile.view');
    Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
    Route::get('/createrestaurant', [RestaurantController::class, 'create'])->name('restaurant.create');
    Route::post('/createrestaurant', [RestaurantController::class, 'store'])->name('restaurant.store');
    Route::get('/createmenu', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/createmenu', [MenuController::class, 'store'])->name('menu.store');
    Route::post('/plat', [PlatController::class, 'store'])->name('plat.store');
// }
// );



require __DIR__.'/auth.php';
