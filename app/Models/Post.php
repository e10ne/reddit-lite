<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subreddit(): BelongsTo
    {
        return $this->belongsTo(Subreddit::class);
    }
}
