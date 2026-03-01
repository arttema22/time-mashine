<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Люди
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-90% mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <!-- People List -->
                    <div id="people-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($people as $person)
                        <div
                            class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="p-5">
                                <div class="flex items-start">
                                    <div class="ml-4 flex-1">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            <a href="{{ route('people.show', $person->slug) }}"
                                                class="hover:text-blue-600 transition-colors">
                                                {{ $person->name }}
                                            </a>
                                        </h3>

                                        <div class="mt-1 text-sm text-gray-600">
                                            Родился: {{ $person->birth_date_formatted }}
                                            @if($person->death_date)
                                            , Умер: {{ $person->death_date_formatted }}
                                            @endif
                                        </div>

                                        @if($person->affiliations->isNotEmpty())
                                        <div class="mt-2">
                                            <p class="text-sm font-medium text-gray-700">Организации:</p>
                                            <div class="flex flex-wrap mt-1">
                                                @foreach($person->affiliations->take(3) as $affiliation)
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mr-1 mb-1">
                                                    {{ $affiliation->organization->name }}
                                                </span>
                                                @endforeach
                                                @if($person->affiliations->count() > 3)
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 mr-1 mb-1">
                                                    +{{ $person->affiliations->count() - 3 }} more
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @if($person->biography)
                                <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                    {{ $person->biography }}
                                </p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $people->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>