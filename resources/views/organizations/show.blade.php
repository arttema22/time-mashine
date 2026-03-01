<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $organization->name }}
            </h2>
            <div class="flex space-x-3">
                <a href="{{ route('organizations.edit', $organization) }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    {{ __('Edit') }}
                </a>
                <form action="{{ route('organizations.destroy', $organization) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this organization?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        {{ __('Delete') }}
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Organization Header -->
                <div class="bg-gradient-to-r from-green-500 to-green-700 px-6 py-8 text-white">
                    <div class="flex flex-col md:flex-row md:items-end md:space-x-6">
                        <div class="flex-shrink-0">
                            @if($organization->logo_path)
                            <img class="h-32 w-32 rounded-lg border-4 border-white shadow-lg object-cover"
                                src="{{ $organization->logo_path }}" alt="{{ $organization->name }}">
                            @else
                            <div class="h-32 w-32 rounded-lg bg-white bg-opacity-20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            @endif
                        </div>

                        <div class="mt-4 md:mt-0">
                            <h1 class="text-3xl font-bold">{{ $organization->name }}</h1>
                            <div class="mt-2 flex items-center space-x-4 text-green-100">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-white bg-opacity-20">
                                    {{ ucfirst($organization->type) }}
                                </span>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>Founded: {{ $organization->founded_date->format('F j, Y') }}</span>
                                </div>
                                @if($organization->dissolved_date)
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <span>Dissolved: {{ $organization->dissolved_date->format('F j, Y') }}</span>
                                </div>
                                @endif
                            </div>

                            @if($members->isNotEmpty())
                            <div class="mt-3 flex flex-wrap gap-2">
                                @foreach($members as $member)
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white bg-opacity-20 text-white">
                                    {{ $member->pivot->role ? $member->pivot->role . ': ' : '' }}{{ $member->name }}
                                    @if(is_null($member->pivot->ended_at))
                                    <span
                                        class="ml-1 inline-flex items-center px-1.5 py-0.5 rounded-full text-xs bg-blue-500 text-white">Current</span>
                                    @endif
                                </span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <!-- Description Section -->
                    @if($organization->description)
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-3">Description</h3>
                        <div class="prose prose-gray max-w-none">
                            <p>{{ $organization->description }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Members Section -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                </svg>
                                Members
                            </h3>

                            @if($members->isEmpty())
                            <p class="text-gray-500 italic">No members recorded.</p>
                            @else
                            <div class="space-y-4">
                                @foreach($members as $member)
                                <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition-colors">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="font-medium text-gray-900">
                                                <a href="{{ route('people.show', $member) }}"
                                                    class="hover:text-blue-600">
                                                    {{ $member->name }}
                                                </a>
                                            </h4>
                                            @if($member->pivot->role)
                                            <p class="text-sm text-gray-600">{{ $member->pivot->role }}</p>
                                            @endif
                                        </div>

                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                                    @if(is_null($member->pivot->ended_at)) bg-green-100 text-green-800 @else bg-gray-100 text-gray-800 @endif">
                                            {{ $member->pivot->started_at->format('Y') }}
                                            @if($member->pivot->ended_at)
                                            - {{ $member->pivot->ended_at->format('Y') }}
                                            @else
                                            - Present
                                            @endif
                                        </span>
                                    </div>

                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $member->pivot->started_at->format('F j, Y') }}
                                        @if($member->pivot->ended_at)
                                        — {{ $member->pivot->ended_at->format('F j, Y') }}
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>

                        <!-- Events Section -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Key Events
                            </h3>

                            @if($events->isEmpty())
                            <p class="text-gray-500 italic">No events recorded.</p>
                            @else
                            <div class="space-y-4">
                                @foreach($events as $event)
                                <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition-colors">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="font-medium text-gray-900">{{ $event->title }}</h4>
                                            @if($event->category)
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 mt-1">
                                                {{ ucfirst($event->category) }}
                                            </span>
                                            @endif
                                        </div>

                                        <span class="text-sm font-medium text-gray-500">
                                            {{ $event->occurred_at->format('Y') }}
                                        </span>
                                    </div>

                                    @if($event->description)
                                    <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $event->description }}</p>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>