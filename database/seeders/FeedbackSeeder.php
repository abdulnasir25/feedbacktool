<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\Reply;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 50) as $value) {
            $feedback = Feedback::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'category' => $faker->randomElement(['bug_report', 'feature_request', 'improvement']),
                'user_id' => User::inRandomOrder()->first()->id, // asign random user
            ]);

            for ($i = 0; $i < 5; $i++) {
                Reply::create([
                    'feedback_id' => $feedback->id,
                    'user_id' => User::inRandomOrder()->first()->id,
                    'response' => $faker->paragraph,
                ]);
            }
        }
    }
}
