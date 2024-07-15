<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first() ?: User::factory(),
            'comment_id' => Lesson::inRandomOrder()->first() ?: Lesson::factory(),
        ];
    }
}
