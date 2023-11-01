<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name'=>'rexona',
            'price'=>'70',
            'product_description'=>'soap',
        
        ]);
        Product::create([
            'product_name'=>'himalaya',
            'price'=>'170',
            'product_description'=>'lotion',
        
        ]);
    
    Product::create([
        'product_name'=>'bag',
        'price'=>'270',
        'product_description'=>'back-pack',
    
    ]);


Product::create([
    'product_name'=>'bottle',
    'price'=>'160',
    'product_description'=>'500ml',

]);

}
}