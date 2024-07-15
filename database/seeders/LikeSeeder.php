<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run(): void
    {
        Comment::each(function (Comment $comment) {
            User::take(mt_rand(1, 5))->inRandomOrder()->get()->each(function (User $user) use ($comment) {
                $comment->likes()->attach($user->id);
            });
        });
    }
}
