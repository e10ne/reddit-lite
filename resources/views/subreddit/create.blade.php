<x-app-layout>
    <h2 class="text-4xl mb-8">Create a new subreddit:</h2>
    <form method="POST" class="flex flex-col gap-4 w-1/2">
        @csrf
        <label class="text-xl flex gap-3 items-center justify-between">
            Title:
            <input type="text" name="title" class="text-black w-2/3" value="{{ old('title') }}" required />
        </label>
        @error("title")
            <p class="text-red-600">{{ $message }}</p>
        @enderror

        <label class="text-xl flex gap-3 items-center justify-between">
            Visibility:
            <select name="visibility" class="text-black w-2/3">
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
        </label>
        @error("visibility")
            <p class="text-red-600">{{ $message }}</p>
        @enderror

        <label class="text-xl flex gap-3 items-center justify-between">
            Description:
            <textarea name="description" class="text-black w-2/3" required>{{ old('description') }}</textarea>
        </label>
        @error("description")
            <p class="text-red-600">{{ $message }}</p>
        @enderror

        <label class="text-xl flex gap-3 items-center justify-between">
            Rules:
            <textarea name="rules" class="text-black w-2/3" required>{{ old('rules') }}</textarea>
        </label>
        @error("rules")
            <p class="text-red-600">{{ $message }}</p>
        @enderror

        <button type="submit" class="bg-green-600 rounded p-2 mt-8 w-32">Submit</button>
    </form>
</x-app-layout>
