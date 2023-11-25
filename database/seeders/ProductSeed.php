<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'pp',
            'quantity'=>'100',
            'price'=>'123',
        ]);
    }
}
