<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = [
            'Electronics',
            'Home Appliances',
            'Gaming',
            'Fashion',
            'Books',
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'image_path' => 'categories/' . strtolower(str_replace(' ', '_', $categoryName)) . '.jpg',
            ]);
        }
    }
}
