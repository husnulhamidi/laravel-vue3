<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        //Question::factory(5)->create();

        User::factory(10)
        ->has(Question::factory(5))
        ->create();
    }
}
