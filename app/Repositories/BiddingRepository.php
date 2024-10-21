<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductSupplier;

class BiddingRepository
{
    public function getData()
    {
        $product = Product::find(1);
        $data['product'] = $product;
        $data['product_supplier'] = ProductSupplier::where('product_id',$product->id)
                                        ->with(['supplier','product'])
                                        ->orderBy('total_cost','asc')
                                        ->get();
        return $data;
    }

}