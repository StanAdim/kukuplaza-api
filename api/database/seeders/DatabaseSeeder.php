<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\District;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'phone' => '255767941560',
            'email' => 'test@mail.com',
        ]);
        $this->call([
            ProductSeeder::class,
            RegionSeeder::class,
            DistrictSeeder::class,
            // permissionSeeder::class,
        ]);
    
    }
}
