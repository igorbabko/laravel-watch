<?php

namespace App\Models;

use App\Traits\Routable;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory, Routable;

    public function firstLesson(): HasOne
    {
        return $this->lessons()->one()->ofMany('number', 'min');
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function scopeSearch(Builder $query, ?string $search): void
    {
        $query->when($search, fn (Builder $query) => $query
            ->where(fn (Builder $query) => $query
                ->whereLike('title', "%{$search}%")
                ->orWhereLike('description', "%{$search}%")
            )
        );
    }

    public function scopeTagged(Builder $query, ?array $tags): void
    {
        $query->when($tags, fn (Builder $query) => $query
            ->whereHas('tags', fn (Builder $query) => $query
                ->whereIn('tags.id', $tags)
            )
        );
    }

    protected function formattedLength(): Attribute
    {
        return Attribute::make(
            get: function () {
                $interval = CarbonInterval::seconds($this->length ?? $this->lessons()->sum('length'))
                    ->cascade()
                    ->toArray();

                $formattedHours = $interval['hours'] ? "{$interval['hours']}h" : '';
                $formattedMinutes = $interval['minutes'] ? "{$interval['minutes']}m" : '';

                return trim($formattedHours.' '.$formattedMinutes);
            }
        )->shouldCache();
    }
}
