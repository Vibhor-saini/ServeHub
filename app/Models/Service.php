<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ServiceCategory;


class Service extends Model
{
    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }


    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
