<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSupplier;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Products
        $product = Product::create([
            'product_code' => 'PRD0000001',
            'product_name' => 'ERP Product',
            'unit' => 'Number(s)',
            'vat' => 5.00,
            'unit_price' => 60000.00
        ]);

        // Create supplierss
        $supplier1 = Supplier::create([
            'name' => 'Al Ain Plastic Industry',
            'currency' => 'Dhirham',
            'payment_terms' => 'Against job completion',
            'delivery_period' => '6 months'
        ]);

        $supplier2 = Supplier::create([
            'name' => 'Abdulrahman Salem Al Saleim Est',
            'currency' => 'Dhirham',
            'payment_terms' => 'Advance',
            'delivery_period' => '6 months'
        ]);

        $supplier3 = Supplier::create([
            'name' => 'Accurate Meezan Trading LLC',
            'currency' => 'Dhirham',
            'payment_terms' => 'CDC',
            'delivery_period' => '5-7 months'
        ]);

        // Create product suppliers
        ProductSupplier::create([
            'product_id' => $product->id,
            'supplier_id' => $supplier1->id,
            'quantity' => 1,
            'total_cost' => 60000.00
        ]);

        ProductSupplier::create([
            'product_id' => $product->id,
            'supplier_id' => $supplier2->id,
            'quantity' => 1,
            'total_cost' => 600000.00
        ]);

        ProductSupplier::create([
            'product_id' => $product->id,
            'supplier_id' => $supplier3->id,
            'quantity' => 1,
            'total_cost' => 120000.00
        ]);
    }
}
