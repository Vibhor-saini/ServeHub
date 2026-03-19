<?php

namespace App\Models;

use App\Models\Booking;


use Illuminate\Database\Eloquent\Model;

class ServiceJob extends Model
{
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
