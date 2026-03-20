<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Service;
use App\Models\Booking;


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {

    $userCount = User::count();
    $serviceCount = Service::count();
    $bookingCount = Booking::count();

    $services = Service::with('bookings.customer')->get();

    return view('dashboard', compact(
        'userCount',
        'serviceCount',
        'bookingCount',
        'services'
    ));
})->middleware('auth');
