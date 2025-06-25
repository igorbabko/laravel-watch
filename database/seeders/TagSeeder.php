<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    private array $data = [
        ['name' => 'Laravel'],
        ['name' => 'Symfony'],
        ['name' => 'Vue'],
        ['name' => 'Nuxt'],
        ['name' => 'React'],
        ['name' => 'Next'],
        ['name' => 'Angular'],
        ['name' => 'Tailwind CSS'],
    ];

    public function run(): void
    {
        Tag::truncate();

        Tag::factory(count($this->data))
            ->sequence(...$this->data)
            ->create();
    }
}
