<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Technology', 'Fashion', 'Garments', 'Furniture'];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}