@props([
    'items',
    'startDate' => null,
    'endDate' => null,
    'rangeStart' => null,
    'rangeEnd' => null,
    'onItemClick' => null,
])

@php
    $start = $startDate ?? $rangeStart;
    $end = $endDate ?? $rangeEnd;
@endphp

<div id="visualization" class="h-full"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var container = document.getElementById("visualization");
        var options = {
            start: @json($start),
            end: @json($end),
            height: '100%',
        };
        var items = new vis.DataSet(@json($items));
        var timeline = new vis.Timeline(container, items, options);

        @if($onItemClick)
            timeline.on("doubleClick", function(properties) {
                if (properties.item) {
                    var item = items.get(properties.item);
                    if (item && item.slug) {
                        {!! $onItemClick !!}
                    }
                }
            });
        @endif
    });
</script>
