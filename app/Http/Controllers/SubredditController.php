<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subreddit;

class SubredditController extends Controller
{
    public function index()
    {
        $subreddits = Subreddit::all();
        return view("subreddit", [
            "subreddits" => $subreddits
        ]);
    }

    public function create()
    {
        return "test";
    }
}
