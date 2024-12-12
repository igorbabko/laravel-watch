<?php

namespace App\Models;

use App\Traits\Routable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory, Routable;

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function firstLesson(): HasOne
    {
        return $this->lessons()->one()->ofMany('number', 'min');
    }
}
