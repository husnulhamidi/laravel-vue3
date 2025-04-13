<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Question;
use App\Models\Answer;
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
        ->has(
            Question::factory(5)->has(
                Answer::factory(15)->state(function ($attributes, Question $question) {
                    return ['user_id' => $question->user_id];
                })
            )
        )
        ->create();
    }
}
