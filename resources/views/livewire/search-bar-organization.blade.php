<div class="relative w-full max-w-3xl mx-auto" x-data="{ open: @entangle('showResults'), focused: false }" @keydown.escape.window="open = false"
    @click.away="open = false">
    <!-- Поисковая строка -->
    <div class="relative">

        <input type="text" wire:model.live.debounce.300ms="search" x-ref="searchInput" x-init="$nextTick(() => { $refs.searchInput.focus(); })"
            placeholder="Поиск по организациям"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"
            @click.away="open = false">

        @if ($search)
            <button wire:click="clearSearch"
                class="absolute right-12 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        @endif

        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>

    <!-- Результаты поиска -->
    @if ($showResults && count($results) > 0)
        <div
            class="absolute z-50 w-full mt-2 bg-white rounded-lg shadow-xl border border-gray-200 max-h-96 overflow-y-auto">
            @foreach ($results as $result)
                <a href="{{ $result['url'] }}"
                    class="block px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0">
                    <div class="flex items-center gap-3">

                        <span class="flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </span>

                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ $result['title'] }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ $result['subtitle'] }}</p>
                        </div>

                    </div>
                </a>
            @endforeach
        </div>
    @endif

    <!-- Нет результатов -->
    @if ($showResults && count($results) === 0 && strlen($search) >= 2)
        <div
            class="absolute z-50 w-full mt-2 bg-white rounded-lg shadow-xl border border-gray-200 p-4 text-center text-gray-500">
            Ничего не найдено
        </div>
    @endif
</div>
