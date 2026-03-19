@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <p>Total Users: {{ $userCount }}</p>
    <p>Total Services: {{ $serviceCount }}</p>
    <p>Total Bookings: {{ $bookingCount }}</p>
@endsection