<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'body' => fake()->sentences(mt_rand(1, 3), true),
            'user_id' => User::inRandomOrder()->first() ?: User::factory(),
            'lesson_id' => Lesson::inRandomOrder()->first() ?: Lesson::factory(),
        ];
    }

    public function reply(): CommentFactory
    {
        return $this->state(function () {
            return [
                'parent_id' => Comment::inRandomOrder()->first() ?: Comment::factory(),
            ];
        });
    }
}
