<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            $this->call([
                CourseSeeder::class,
                LessonSeeder::class,
                TagSeeder::class,
            ]);
        });
    }
}
