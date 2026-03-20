@extends('layouts.app')

@section('content')
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>
<h1>Dashboard</h1>

<p>Total Users: {{ $userCount }}</p>
<p>Total Services: {{ $serviceCount }}</p>
<p>Total Bookings: {{ $bookingCount }}</p>

<h2>Services & Their Bookings</h2>

@foreach($services as $service)
<h3>
    {{ $service->title }}
    ({{ $service->bookings->count() }} bookings)
</h3>

@if($service->bookings->count())
<ul>
    @foreach($service->bookings as $booking)
    <li>
        Booking ID: {{ $booking->id }} |
        Customer: {{ $booking->customer->name ?? 'N/A' }} |
        Status:
        @if($booking->status == 'pending')
        <span style="color: orange;">Pending</span>
        @elseif($booking->status == 'completed')
        <span style="color: green;">Completed</span>
        @else
        <span>{{ $booking->status }}</span>
        @endif
        | Time: {{ $booking->created_at->format('d M Y, h:i A') }}
    </li>
    @endforeach
</ul>
@else
<p>No bookings</p>
@endif

@endforeach
@endsection