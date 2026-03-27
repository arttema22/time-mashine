@props(['title' => config('app.name')])

<x-guest-layout>
    <div class="min-h-80 flex items-center justify-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <header class="text-center mb-12">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-3 dark:text-gray-100">{{ $title }}</h1>
            </header>

            <div class="mb-10">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-guest-layout>
