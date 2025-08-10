<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
