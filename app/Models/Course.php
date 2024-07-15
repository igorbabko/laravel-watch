<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    //    public function firstLesson()
    //    {
    //        return $this->hasOneThrough(Lesson::class, Module::class)->orderBy('order');
    //    }

    //    protected function repositoryUrl(): Attribute
    //    {
    //        return Attribute::make(
    //            get: fn () => 'https://github.com/igorbabko/'.$this->repository,
    //        );
    //    }
}
