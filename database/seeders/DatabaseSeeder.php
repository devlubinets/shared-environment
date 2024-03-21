<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Env;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use EnvironmentFile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);


        for ($i = 30; $i > 0; $i--) {
            Env::query()->create([
                    'file_name' => "env." . rand(1,1000),
                    'file_size' =>  rand(123012300,99999999999999),
                ]);
        }
    }
}
