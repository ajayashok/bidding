<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSupplier extends Model
{
    protected $fillable = [
        'product_id',
        'supplier_id',
        'quantity',
        'total_cost'
    ];

    public function supplier()
    {
        return $this->hasOne(Supplier::class,'id','supplier_id');
    }
    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
