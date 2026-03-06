<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $organization->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-90% mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <h1 class="text-2xl font-bold mb-4">{{ $organization->name }}</h1>
                <p class="text-gray-600 mb-6">
                    {{ $organization->started_at->format('d.m.Y') }}
                    @if($organization->ended_at)
                    — {{ $organization->ended_at->format('d.m.Y') }}
                    @endif
                </p>

                <div id="visualization"></div>

                <script>
                    var items = new vis.DataSet(@json($items));

                    var container = document.getElementById("visualization");
                    var options = {
                        start: @json($startDate),
                        end: @json($endDate),
                        height: '60vh',
                        stack: true,
                        locale: 'ru',
                    };

                    var timeline = new vis.Timeline(container, items, options);
                </script>

            </div>
        </div>
    </div>
</x-guest-layout>
