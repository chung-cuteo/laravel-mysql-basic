<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();


        for($i = 1; $i <= 5; $i++) {
            \App\Models\Phone::create([
                'id' => $i,
                'user_id' => $i,
                'phone' => '0812345678'. $i
            ]);
        }
    }
}
