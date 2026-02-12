<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
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
    // The main page
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');

// The route that handles the selection and calculates hours
Route::get('/reservation/setup', [ReservationController::class, 'create'])->name('reservation.create');

// The final store
Route::post('/reservation/confirm', [ReservationController::class, 'store'])->name('reservation.store');
// }
// );



require __DIR__.'/auth.php';
