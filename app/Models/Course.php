<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function modules()
    {
        return $this->hasMany(Module::class)->orderBy('order');
    }

    public function firstLesson()
    {
        return $this->hasOneThrough(Lesson::class, Module::class)->orderBy('order');
    }

    protected function repositoryUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => 'https://github.com/igorbabko/'.$this->repository,
        );
    }
}
