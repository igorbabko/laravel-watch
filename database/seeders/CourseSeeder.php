<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private array $data = [
        [
            'title' => 'JetBrains IDE | Productivity',
            'description' => 'Let\'s review how to use JetBrains IDEs productively. PhpStorm will be used for showcasing features.',
            'repository_url' => 'https://github.com/igorbabko/phpstorm-productivity',
        ],
        [
            'title' => 'Vue Composition API From Scratch',
            'description' => 'Project development on Vue Composition API from scratch.',
            'repository_url' => 'https://github.com/igorbabko/ontrack',
        ],
        [
            'title' => 'Builds with Vite',
            'description' => 'Let\'s explore the power of modern frontend bundler Vite.',
            'repository_url' => 'https://github.com/igorbabko/builds-with-vite',
        ],
        [
            'title' => 'VS Code | My Setup',
            'description' => 'Let\'s reproduce my VS Code setup by applying settings one by one.',
            'repository_url' => 'https://github.com/igorbabko/vscode-setup',
        ],
        [
            'title' => 'VS Code Productivity | My Hot Keys',
            'description' => 'Let\'s reproduce my VS Code key bindings one by one for a productivity boost.',
            'repository_url' => 'https://github.com/igorbabko/vscode-key-bindings',
        ],
        [
            'title' => 'TypeScript Integration Into Vue App From Scratch',
            'description' => 'Step-by-step TypeScript integration into a complete Vue application from scratch.',
            'repository_url' => 'https://github.com/igorbabko/vue-typescript-time-tracker',
        ],
        [
            'title' => 'VSCode Neovim Extension',
            'description' => 'Let\'s explore VSCode Neovim extension for 10X productivity and review my Vim configurations.',
            'repository_url' => 'https://github.com/igorbabko/vscode-neovim-extension',
        ],
        [
            'title' => 'Vite in Laravel Project',
            'description' => 'A detailed guide on how to use Vite in Laravel project.',
            'repository_url' => 'https://github.com/igorbabko/laravel-vite',
        ],
        [
            'title' => 'PhpStorm Setup',
            'description' => 'Let\'s reproduce my PhpStorm setup by applying settings one by one.',
            'repository_url' => 'https://github.com/igorbabko/phpstorm-ui',
        ],
        [
            'title' => 'JavaScript Unit Testing For Beginners',
            'description' => 'Learn JavaScript unit testing from scratch by using testing framework Vitest.',
            'repository_url' => 'https://github.com/igorbabko/javascript-unit-testing',
        ],
        [
            'title' => 'VS Code + Neovim | Multiple Cursors',
            'description' => 'Productive management of multiple cursors / selections with vscode-multi-cursor plugin.',
            'repository_url' => 'https://github.com/igorbabko/vscode-multi-cursor',
        ],
        [
            'title' => 'Laravel Herd | PHP Development Environment',
            'description' => 'Review of Laravel Herd - blazing fast, native Laravel and PHP development environment.',
            'repository_url' => 'https://github.com/igorbabko/laravel-herd',
        ],
        [
            'title' => 'IdeaVim | Vim in JetBrains IDE',
            'description' => 'Drastically Improve your productivity by leveraging Vim motions / mappings and powerful modern IDE at the same time.',
            'repository_url' => 'https://github.com/igorbabko/ideavim-plugin',
        ],
    ];

    public function run(): void
    {
        Course::truncate();

        Course::factory(50)
            ->sequence(fn (Sequence $sequence) => $this->data[$sequence->index] ?? [])
            ->create();
    }
}
