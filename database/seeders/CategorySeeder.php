<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Mobile and Gadgets',
                'image_path' => 'categories/mobile_and_gadgets.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wearables',
                'image_path' => 'categories/wearables.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessories',
                'image_path' => 'categories/accessories.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kitchen Appliances',
                'image_path' => 'categories/kitchen_appliances.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptops and Computers',
                'image_path' => 'categories/laptops.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Television and Audio',
                'image_path' => 'categories/tv_audio.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaming and Graphics',
                'image_path' => 'categories/gaming.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
