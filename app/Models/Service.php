<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ServiceCategory;


class Service extends Model
{

    protected $fillable = [
        'provider_id',
        'category_id',
        'title',
        'description',
        'price',
        'duration',
        'is_active'
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }


    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'service_id');
    }
}
