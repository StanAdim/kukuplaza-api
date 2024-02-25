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
        $data = [
            [
                'name' => 'Vifanga',
                'price' =>5000, 
                'noOfstars' => 3,
                'productImg1' => 'kuku-3.jpg',
                'productImg2' => 'kuku-3.jpg',
                'productImg3' => 'kuku-4.jpg',
                'description' => "hello Product",
                'category_id' => '1'
            ],
            [
                'name' => 'Icubator',
                'price' => 450000, 
                'noOfstars' => 3,
                'productImg1' => 'kuku-21.jpg',
                'productImg2' => 'kuku-21.jpg',
                'productImg3' => 'kuku-5.jpg',
                'description' => "hello Product",
                'category_id' => '1'
            ],
            [
                'name' => 'Feeder',
                'price' => 5000, 
                'noOfstars' => 3,
                'productImg1' => 'kuku-7.jpg',
                'productImg2' => 'kuku-7.jpg',
                'productImg3' => 'kuku-1.jpg',
                'description' => "hello Product",
                'category_id' => '1'
            ],
            [
                'name' => 'Cage',
                'price' => 89000, 
                'noOfstars' => 3,
                'productImg1' => 'kuku-12.jpg',
                'productImg2' => 'kuku-12.jpg',
                'productImg3' => 'kuku-13.jpg',
                'description' => "hello Product",
                'category_id' => '1'
            ],
            [
                'name' => 'Grinder Machine',
                'price' => 973000, 
                'noOfstars' => 3,
                'productImg1' => 'kuku-8.jpg',
                'productImg2' => 'kuku-8.jpg',
                'productImg3' => 'kuku-9.jpg',
                'description' => "hello Product",
                'category_id' => '1'
            ],
        ];
        $newProduct = new Product();
        foreach ($data as $item ) {
            $newProduct->create($item);
        }
    }
}
