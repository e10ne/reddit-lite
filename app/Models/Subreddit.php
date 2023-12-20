<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subreddit extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "visibility",
        "description",
        "rules",
    ];

    public function members(): BelongsToMany {
        return $this->belongsToMany(User::class)
        ->withPivot("role")
        ->using(SubredditUser::class);
    }
}
