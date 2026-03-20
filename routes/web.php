<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\Booking;


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {


    if (Auth::user()->role_id != 1) {

        $role = Auth::user()->role_id;

        if ($role == 2) {
            return "Provider Dashboard (coming soon)";
        }

        if ($role == 3) {
            return "Customer Dashboard (coming soon)";
        }

        return redirect('/login');
    }

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
