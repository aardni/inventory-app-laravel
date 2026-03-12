<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic devices and gadgets'
        ]);

        Category::create([
            'name' => 'Accessories',
            'description' => 'Computer and phone accessories'
        ]);

        Category::create([
            'name' => 'Office Equipment',
            'description' => 'Equipment used in office'
        ]);

        Category::create([
            'name' => 'Computer',
            'description' => 'Laptop and PC hardware'
        ]);
    }
}