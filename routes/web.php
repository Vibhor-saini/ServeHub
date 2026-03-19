<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Service;
use App\Models\Booking;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $userCount = User::count();
    $serviceCount = Service::count();
    $bookingCount = Booking::count();

    return view('dashboard', compact('userCount', 'serviceCount', 'bookingCount'));
});
