<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Payment;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function booking()
    {
        return $this->belongsTo(Booking::class,'booking_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'invoice_id');
    }
}
