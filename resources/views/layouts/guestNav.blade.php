<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 flex justify-between px-8 py-4">
    <div class="shrink-1 flex items-center mx-8">
        <a class="flex items-center gap-4" href="{{ route('/') }}">
            <x-application-logo class="block h-16 w-auto fill-current text-gray-800 dark:text-gray-200" />
            <h1 class="text-gray-800 dark:text-gray-200 text-2xl">Reddit Lite</h1>
        </a>
    </div>
    <div class="flex gap-4 mx-8 text-gray-500 dark:text-gray-400 self-center text-lg">
        <a class="hover:text-gray-700 dark:hover:text-gray-300 p-4" href="{{ route('login') }}">Login</a>
        <a class="hover:text-gray-700 dark:hover:text-gray-300 p-4" href="{{ route('register') }}">Register</a>
    </div>
</nav>
