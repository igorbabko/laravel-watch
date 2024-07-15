<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::each(function (Module $module) {
            collect(range(1, mt_rand(3, 10)))->each(function () use ($module) {
                Lesson::factory()->for($module)->create();
            });
        });
    }
}
