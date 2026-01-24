<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'summary',
        'body',
        'published',
    ];

    public function getPreviewTextAttribute(): string
    {
        return $this->summary ?: $this->body;
    }

    /**
     * Define the relationship between Post and Comments
     * Order comments by created_at DESC
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)
            ->latest();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Posts are loaded using its unique slug field
     * rather than ID
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
