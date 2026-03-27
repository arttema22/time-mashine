<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ $person->name }}
        </h2>
        <p class="text-gray-600">
            {{ $person->birth_date_formatted }}
            @if ($person->death_date)
                — {{ $person->death_date_formatted }}
            @endif
        </p>
    </x-slot>

    <x-timeline-visualization
        :items="$items"
        :range-start="$rangeStart"
        :range-end="$rangeEnd"
        :on-click="'window.location.href = \'/people/\' + item.slug;'"
    />

</x-guest-layout>
