<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $organization->name }}
        </h2>
        <p class="text-gray-600">
            {{ $organization->started_at->format('d.m.Y') }}
            @if ($organization->ended_at)
                — {{ $organization->ended_at->format('d.m.Y') }}
            @endif
        </p>
    </x-slot>

    <div id="visualization" class="h-full"></div>

    <script>
        var items = new vis.DataSet(@json($items));

        var container = document.getElementById("visualization");
        var options = {
            start: @json($startDate),
            end: @json($endDate),
            height: '100%',
        };

        var timeline = new vis.Timeline(container, items, options);
    </script>

</x-guest-layout>
