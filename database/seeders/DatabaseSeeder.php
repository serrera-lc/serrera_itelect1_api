<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Optional: If you're still using the default User model
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // ✅ Make sure usersinfo is seeded BEFORE products
        $this->call([
            UsersinfoSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
