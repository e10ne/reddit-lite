<x-app-layout>
    <div class="p-4 text-lime-700">
        <h2 class="text-5xl">Subreddit</h2>
        @foreach ($subreddits as $item)
            <p>{{ $item->title }}</p>
        @endforeach
    </div>
</x-app-layout>
