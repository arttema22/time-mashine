<x-guest-layout>

    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="text-center mb-12">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-3">{{ config('app.name') }}</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Исследуйте ключевые вехи в жизни людей и организаций — от рождения до последнего события.
                </p>
            </header>

            <div class="mb-10">
                <livewire:search-bar />
            </div>

        </div>
    </div>

</x-guest-layout>
