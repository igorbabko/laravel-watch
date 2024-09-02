<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::saving(function (Comment $comment) {
            $comment->user_id = $comment->user_id ?: auth()->id();

            if ($comment->parent_id) {
                $comment->lesson_id = Comment::find($comment->parent_id)->lesson_id;
            }
        });
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(static::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(static::class, 'parent_id');
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function scopeSearch($query, ?string $text)
    {
        return $query->where('text', 'like', "%$text%");
    }

    public function isOwnedBy(User $user): bool
    {
        return $this->user->is($user);
    }

    public function isLikedBy(User $user): bool
    {
        return $user->likes()->where('comment_id', $this->id)->exists();
    }
}
