<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        return view("subreddit.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "regex:/^[a-zA-Z0-9]+$/|required|unique:subreddits|max:255|min:3",
            "visibility" => "required",
            "description" => "required|max:255|min:10",
            "rules" => "required|max:255|min:5",
        ]);

        $subreddit = new Subreddit();
        $subreddit->title = $request->title;
        $subreddit->visibility = $request->visibility;
        $subreddit->description = $request->description;
        $subreddit->rules = $request->rules;
        $subreddit->save();

        $id = $request->user()->id;
        $subreddit->members()->attach($id, ["role" => "admin"]);

        return redirect("/r/{$subreddit->title}");
    }

    public function show(string $title)
    {
        $subreddit = Subreddit::where("title", $title)->first();

        if (!empty($subreddit)) {
            $posts = Post::where("subreddit_id", $subreddit->id)->get();
            return view("subreddit.index", [
                "subreddit" => $subreddit,
                "posts" => $posts,
            ]);
        }

        return back();
    }
}
