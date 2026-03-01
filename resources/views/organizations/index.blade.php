<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Organizations') }}
            </h2>
            <a href="{{ route('organizations.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Add Organization') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <!-- Search and Filter -->
                    <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="relative max-w-md mb-4 md:mb-0">
                            <input type="text" id="search-organizations" placeholder="Search organizations..."
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex space-x-2">
                            <select id="type-filter"
                                class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">All Types</option>
                                <option value="band">Bands</option>
                                <option value="company">Companies</option>
                                <option value="non-profit">Non-profits</option>
                                <option value="government">Government</option>
                            </select>

                            <select id="sort-organizations"
                                class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="name_asc">Name A-Z</option>
                                <option value="name_desc">Name Z-A</option>
                                <option value="founded_date_desc">Newest First</option>
                                <option value="founded_date_asc">Oldest First</option>
                            </select>
                        </div>
                    </div>

                    <!-- Organizations List -->
                    <div id="organizations-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($organizations as $organization)
                        <div
                            class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="p-5">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        @if($organization->logo_path)
                                        <img class="h-16 w-16 rounded-lg object-cover"
                                            src="{{ $organization->logo_path }}" alt="{{ $organization->name }}">
                                        @else
                                        <div class="h-16 w-16 rounded-lg bg-gray-200 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="ml-4 flex-1">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            <a href="{{ route('organizations.show', $organization) }}"
                                                class="hover:text-blue-600 transition-colors">
                                                {{ $organization->name }}
                                            </a>
                                        </h3>

                                        <div class="mt-1 text-sm text-gray-600">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                {{ ucfirst($organization->type) }}
                                            </span>
                                        </div>

                                        <div class="mt-1 text-sm text-gray-600">
                                            Founded: {{ $organization->founded_date }}
                                            @if($organization->dissolved_date)
                                            , Dissolved: {{ $organization->dissolved_date }}
                                            @endif
                                        </div>

                                        @if($organization->people->isNotEmpty())
                                        <div class="mt-2">
                                            <p class="text-sm font-medium text-gray-700">Key Members:</p>
                                            <div class="flex flex-wrap mt-1">
                                                @foreach($organization->people->take(3) as $person)
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mr-1 mb-1">
                                                    {{ $person->name }}
                                                </span>
                                                @endforeach
                                                @if($organization->people->count() > 3)
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 mr-1 mb-1">
                                                    +{{ $organization->people->count() - 3 }} more
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="ml-2 self-start">
                                        <a href="{{ route('organizations.edit', $organization) }}"
                                            class="text-gray-400 hover:text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                @if($organization->description)
                                <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                    {{ $organization->description }}
                                </p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $organizations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>