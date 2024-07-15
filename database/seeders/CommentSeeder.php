<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        Lesson::take(1)
            ->get()
            ->flatMap(fn (Lesson $lesson) => $this->forLesson($lesson))
            ->flatMap(fn (Comment $comment) => $this->repliesOf($comment))
            ->flatMap(fn (Comment $comment) => $this->repliesOf($comment))
            ->flatMap(fn (Comment $comment) => $this->repliesOf($comment));
    }

    private function forLesson(Lesson $lesson)
    {
        return Comment::factory(1)->for($lesson)->create();
    }

    private function repliesOf(Comment $comment)
    {
        return Comment::factory(1)->for($comment, 'parent')->create();
    }
}
