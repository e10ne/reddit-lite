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
        return view("createSubreddit");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "regex:/^[a-zA-Z0-9]+$/|required|unique:subreddits|max:255",
            "visibility" => "required",
            "description" => "required|max:255",
            "rules" => "required|max:255",
        ]);
    }
}
