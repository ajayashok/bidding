<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'currency',
        'payment_terms',
        'delivery_period'
    ];
}
