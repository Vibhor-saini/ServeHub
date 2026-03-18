<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use App\Models\ServiceJob;
use App\Models\Invoice;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function job()
    {
        return $this->hasOne(ServiceJob::class, 'booking_id');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'booking_id');
    }
}
