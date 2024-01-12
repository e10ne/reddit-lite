<x-app-layout>
    <div class="flex justify-between">
        <h2 class="text-white text-4xl ">{{$subreddit->title}}</h2>

        @auth
            <a href="{{ route('post.create', ['title' => $subreddit->title]) }}">Create a new post</a>
        @endauth
    </div>

    @foreach ($posts as $post)
        <article class="border w-1/2 my-4 p-8">
            <a href="/r/{{$subreddit->title}}/{{$post->id}}">
                <h3 class="text-xl">{{ $post->title }}</h3>
            </a>
        </article>
    @endforeach
</x-app-layout>
