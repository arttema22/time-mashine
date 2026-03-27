@props([
    'searchType' => 'all', // all, people, organizations, events
    'placeholder' => null,
    'showFilters' => false,
    'showSubtitle' => true,
    'clickable' => true,
])

@php
    $placeholder = $placeholder ?? __("search.placeholders.{$searchType}");
    
    $icons = [
        'people' => '<svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg>',
        'organization' => '<svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>',
        'event' => '<svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/></svg>',
    ];

    $badgeStyles = [
        'people' => 'bg-primary-500 text-white',
        'organization' => 'bg-green-100 text-green-800',
        'event' => 'bg-purple-100 text-purple-800',
    ];
@endphp

<div class="relative w-full max-w-3xl mx-auto" x-data="{ open: @entangle('showResults'), focused: false }" 
    @keydown.escape.window="open = false" @click.away="open = false">
    <!-- Поисковая строка -->
    <div class="relative">
        <input type="text" wire:model.live.debounce.300ms="search" x-ref="searchInput" 
            x-init="$nextTick(() => { $refs.searchInput.focus(); })"
            placeholder="{{ $placeholder }}"
            class="dark:text-gray-800 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"
            @click.away="open = false">

        @if ($search)
            <button wire:click="clearSearch"
                class="absolute right-12 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        @endif

        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>

    <!-- Фильтры -->
    @if($showFilters)
    <div class="flex gap-2 mt-2 flex-wrap">
        @foreach(['all', 'people', 'organizations', 'events'] as $filterValue)
            <button wire:click="selectFilter('{{ $filterValue }}')"
                class="px-3 py-1 text-sm rounded-full {{ $selectedFilter === $filterValue ? 'bg-primary-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                {{ __("search.filters.{$filterValue}") }}
            </button>
        @endforeach
    </div>
    @endif

    <!-- Результаты поиска -->
    @if ($showResults && count($results) > 0)
        <div class="absolute z-50 w-full mt-2 bg-white rounded-lg shadow-xl border border-gray-200 max-h-96 overflow-y-auto">
            @foreach ($results as $result)
                @php
                    $resultType = $result['type'] ?? $searchType;
                    $icon = $icons[$resultType] ?? $icons['people'];
                    $badgeStyle = $badgeStyles[$resultType] ?? '';
                @endphp
                
                @if($clickable && isset($result['url']))
                    <a href="{{ $result['url'] }}"
                        class="block px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0">
                @else
                    <div class="block px-4 py-3 border-b border-gray-100 last:border-0">
                @endif
                
                    <div class="flex items-center gap-3">
                        <!-- Иконка типа -->
                        <span class="flex-shrink-0">
                            {!! $icon !!}
                        </span>

                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ $result['title'] }}</p>
                            @if($showSubtitle && isset($result['subtitle']))
                                <p class="text-xs text-gray-500 truncate">{{ $result['subtitle'] }}</p>
                            @endif
                        </div>

                        @if($searchType === 'all')
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $badgeStyle }}">
                                {{ __("search.types.{$resultType}") }}
                            </span>
                        @endif
                    </div>
                
                @if($clickable && isset($result['url']))
                    </a>
                @else
                    </div>
                @endif
            @endforeach
        </div>
    @endif

    <!-- Нет результатов -->
    @if ($showResults && count($results) === 0 && strlen($search) >= 2)
        <div class="absolute z-50 w-full mt-2 bg-white rounded-lg shadow-xl border border-gray-200 p-4 text-center text-gray-500">
            {{ __("search.no_results") }}
        </div>
    @endif
</div>
