<x-app-layout>
    <h2 class="text-4xl text-lime-700 mb-6">Subreddit</h2>
    @foreach ($subreddits as $item)
        <article class="border flex flex-col gap-4 p-4 my-4 w-1/2 mx-4">
            <a href="/r/{{$item->title}}">
                <h3 class="text-lg">r/{{$item->title}}</h3>
            </a>
        </article>
    @endforeach
</x-app-layout>
