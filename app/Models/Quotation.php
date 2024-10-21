<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'product_supplier_id',
        'awarded_line',
        'supplier_recommendation',
        'comment',
        'vat_awarded_item',
        'net_total_awarded_item'
    ];
}
