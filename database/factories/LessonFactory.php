<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = ucfirst(fake()->words(mt_rand(2, 6), true));

        return [
            'order' => Lesson::count() + 1,
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->sentences(mt_rand(2, 5), true),
            'module_id' => Module::inRandomOrder()->first(),
            'commit' => '2bdb6d6a823557cf766fcbdc70a480002477792c',
            'video_id' => '835029053',
        ];
    }
}
