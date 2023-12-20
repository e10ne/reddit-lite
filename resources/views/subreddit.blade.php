<x-app-layout>
    <h2 class="text-4xl text-lime-700">Subreddit</h2>
    @foreach ($subreddits as $item)
        <p>{{ $item->title }}</p>
    @endforeach
</x-app-layout>
