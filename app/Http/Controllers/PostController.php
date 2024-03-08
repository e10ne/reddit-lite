<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subreddit;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(string $title)
    {
        $subreddit = Subreddit::where("title", $title)->first();

        if (!isset($subreddit)) return redirect("/");

        return view("post.create");
    }

    public function store(Request $request, string $title)
    {
        $subreddit_id = Subreddit::where("title", $title)->value("id");
        $request->validate([
            "title" => "required|min:3|max:255",
            "description" => "required|min:10",
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->subreddit_id = $subreddit_id;
        $post->creator_id = $request->user()->id;
        $post->save();

        return redirect("/r/{$title}");
    }

    public function show(string $subreddit_title, string $postID)
    {
        $post = Post::where("id", $postID)->first();

        return view("post.show", ["post" => $post, "subreddit_title" => $subreddit_title]);
    }
}
