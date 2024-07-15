<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    //    public function completed()
    //    {
    //        return $this->hasOne(CompletedLesson::class)->ofMany(
    //            [],
    //            fn ($query) => $query->where('user_id', auth()->id())
    //        );
    //    }
    //
    //    protected function previous(): Attribute
    //    {
    //        return Attribute::make(
    //            get: fn () => static::query()->where('order', $this->order - 1)->first(),
    //        );
    //    }
    //
    //    protected function next(): Attribute
    //    {
    //        return Attribute::make(
    //            get: fn () => static::query()->where('order', $this->order + 1)->first(),
    //        );
    //    }
    //
    //    protected function videoUrl(): Attribute
    //    {
    //        return Attribute::make(
    //            get: fn () => "https://player.vimeo.com/video/{$this->video_id}"
    //        );
    //    }
    //
    //    protected function sourceCodeUrl(): Attribute
    //    {
    //        return Attribute::make(
    //            get: fn () => $this->module->course->repositoryUrl.'/commit/'.$this->commit,
    //        );
    //    }
}
