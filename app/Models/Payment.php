<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
}
