<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Sarimi',
            'code'=>'MieSarimi',
            'price'=>4000
        ]);
        Product::create([
            'name'=>'Taro',
            'code'=>'RoTaro',
            'price'=>2000
        ]);
        Product::create([
            'name'=>' BukuVision',
            'code'=>'Visi',
            'price'=>4000
        ]);
        Product::create([
            'name'=>'Closeapp',
            'code'=>'yoiyo',
            'price'=>5000
        ]);
        Product::create([
            'name'=>'Aoka',
            'code'=>'oka',
            'price'=>2000
        ]);
    }
}
