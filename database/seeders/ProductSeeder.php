<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'name' => 'iPhone 15',
            'sku' => 'IP15-001',
            'price' => 15000000,
            'stock' => 25,
            'description' => 'Latest Apple smartphone'
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Samsung Galaxy S23',
            'sku' => 'SGS23-002',
            'price' => 13500000,
            'stock' => 10,
            'description' => 'Samsung flagship smartphone'
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Macbook Pro M3',
            'sku' => 'MBP-M3-003',
            'price' => 32000000,
            'stock' => 5,
            'description' => 'Apple laptop with M3 chip'
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Wireless Mouse',
            'sku' => 'WM-004',
            'price' => 150000,
            'stock' => 50,
            'description' => 'Ergonomic wireless mouse'
        ]);
    }
}