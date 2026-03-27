<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $person->name }}
        </h2>
        <p class="text-gray-600">
            {{ $person->birth_date->format('d.m.Y') }}
            @if ($person->death_date)
                — {{ $person->death_date->format('d.m.Y') }}
            @endif
        </p>
    </x-slot>

    <div id="visualization" class="h-full"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var container = document.getElementById("visualization");
            var options = {
                start: @json($rangeStart),
                end: @json($rangeEnd),
                height: '100%',
            };
            // var groups = new vis.DataSet(@json('$groups'));
            var items = new vis.DataSet(@json($items));

            // var timeline = new vis.Timeline(container, items, groups, options);
            var timeline = new vis.Timeline(container, items, options);

            timeline.on("doubleClick", function(properties) {
                if (properties.item) {
                    var item = items.get(properties.item);
                    if (item && item.slug) {
                        window.location.href = '/people/' + item.slug;
                    }
                }
            });
        });
    </script>

</x-guest-layout>
