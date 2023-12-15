<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SubredditUser extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["subreddit_id", "user_id", "role"];
}
