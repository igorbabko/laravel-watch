<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    use HasFactory;

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    protected function previous(): Attribute
    {
        return Attribute::make(
            get: fn () => $this
                ->course
                ->lessons()
                ->firstWhere('number', $this->number - 1),
        );
    }

    protected function next(): Attribute
    {
        return Attribute::make(
            get: fn () => $this
                ->course
                ->lessons()
                ->firstWhere('number', $this->number + 1),
        );
    }

    protected function routeUrl(): Attribute
    {
        return Attribute::make(get: fn () => route('lessons.show', $this));
    }
}
