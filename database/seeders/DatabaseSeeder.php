<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'imane',
            'email' => 'imane@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'doha',
            'email' => 'doha@gmail.com',
        ]);
    }
}
