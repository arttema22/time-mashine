<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ $event->name }}
        </h2>
        <p class="text-gray-600">
            {{ $event->started_at_formatted }}
            @if ($event->ended_at)
                — {{ $event->ended_at_formated }}
            @endif
        </p>
    </x-slot>

    <x-timeline-visualization
        :items="$items"
        :range-start="$rangeStart"
        :range-end="$rangeEnd"
    />

</x-guest-layout>
