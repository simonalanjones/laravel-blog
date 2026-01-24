<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug',
        'published',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('ordered', function (Builder $query) {
            $query->orderBy('title');
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
