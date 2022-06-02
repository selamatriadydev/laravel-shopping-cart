<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 gpu, 16gb, 512 ssd gb',
                'description' => 'apple details',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxi Book Pro',
                'details' => '13.3 inch, 8gb ram, ddr4 SDRAM, 256GB',
                'description' => 'Samsung detail',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
