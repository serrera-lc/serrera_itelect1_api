<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Google Pixel 9 Pro', 'Latest flagship with advanced AI features and exceptional photography capabilities.', 1],
            ['OnePlus 12', 'Premium Android phone with Hasselblad cameras and ultra-fast charging.', 1],
            ['Apple AirPods Pro 2', 'Wireless earbuds with active noise cancellation and spatial audio.', 3],
            ['Lenovo ThinkPad X1 Carbon', 'Business ultrabook with durable design and robust security features.', 5],
            ['Fujifilm X-T5', 'Mirrorless camera with retro styling and excellent color science.', 5],
            ['ASUS ZenBook Pro Duo', 'Dual-screen laptop designed for creative professionals.', 5],
            ['Sony SRS-XG300', 'Powerful portable speaker with customizable lighting and party features.', 5],
            ['Corsair M65 RGB Elite', 'Precision gaming mouse with adjustable weights and sniper button.', 3],
            ['LG C3 OLED 65"', 'Premium OLED TV with perfect blacks and gaming-optimized features.', 6],
            ['Google Nest Hub Max', 'Smart display with built-in camera for video calls and home monitoring.', 5],
            ['Samsung Galaxy Tab S9 Ultra', 'Large-screen Android tablet with S Pen support and DeX productivity.', 5],
            ['Keychron Q1 Pro', 'Wireless mechanical keyboard with hot-swappable switches and aluminum body.', 7],
            ['Belkin MagSafe 3-in-1 Charger', 'Wireless charging station for iPhone, Apple Watch, and AirPods.', 3],
            ['NVIDIA RTX 4080 Super', 'High-end graphics card for demanding games and AI applications.', 7],
            ['Ultimate Ears MEGABOOM 3', 'Rugged 360° Bluetooth speaker with deep bass and 20-hour battery.', 5],
            ['Nothing Phone (2)', 'Unique smartphone with transparent design and customizable LED interface.', 1],
            ['Garmin Forerunner 965', 'Advanced GPS running watch with AMOLED display and training metrics.', 2],
            ['Samsung T7 Shield SSD', 'Rugged portable SSD with fast transfer speeds and drop protection.', 3],
            ['NETGEAR Orbi WiFi 6E', 'Mesh WiFi system for whole-home coverage and multi-gigabit speeds.', 5],
            ['Xbox Series X', 'Powerful gaming console with Quick Resume and Game Pass compatibility.', 7]
        ];

        foreach ($products as $index => [$name, $description, $categoryId]) {
            Product::create([
                'name' => $name,
                'description' => $description,
                'category_id' => $categoryId,
                'user_id' => $index % 2 === 0 ? 1 : 2,
                'price' => rand(5000, 30000),
                'image_path' => null,
            ]);
        }
    }
}