<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    public function run(): void
    {
        Comment::each(function (Comment $comment) {
            User::take(mt_rand(1, 5))->inRandomOrder()->each(function (User $user) use ($comment) {
                DB::table('likes')->insert([
                    'user_id' => $user->id,
                    'comment_id' => $comment->id,
                ]);
            });
        });
    }
}
