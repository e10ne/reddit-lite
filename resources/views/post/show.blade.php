<x-app-layout>
    <div class="flex flex-col gap-4">
        <a href="/r/{{$subreddit_title}}">&lt;&hyphen; go back to subreddit</a>
        <article class="flex flex-col w-2/3 border p-4 gap-4">
            <div class="flex justify-between">
                <p>created by: {{$post->creator->username}}</p>
                <p>on: {{$post->created_at}}</p>
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-2xl">{{$post->title}}</h2>
                <p>{{$post->description}}</p>
            </div>
        </article>
    </div>
</x-app-layout>
