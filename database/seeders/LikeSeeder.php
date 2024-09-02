<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run(): void
    {
        Comment::where('lesson_id', 1)->take(3)->get()
            ->each(fn (Comment $comment) => $comment->likes()->create(['user_id' => 1]));

        Comment::each(function (Comment $comment) {
            User::whereIn('id', [2, 3, 4])->get()
                ->each(fn (User $user) => $comment->likes()->create(['user_id' => $user->id]));
        });
    }
}
