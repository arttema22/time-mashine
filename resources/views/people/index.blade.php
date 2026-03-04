<x-guest-layout>
    <style type="text/css">
        .vis-item.dead {
            background-color: darkgray;
            border-color: gray;
            color: white;
        }

        .vis-item.war {
            background-color: rgba(63, 63, 63, 0.4);
            color: white;
        }
    </style>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Люди
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-90% mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Навигация по временной шкале -->
                <div class="mb-4 flex justify-between items-center">
                    <div class="text-lg font-semibold text-gray-800">
                        📅 {{ $currentYear - $range }} — {{ $currentYear + $range }}
                    </div>

                    <div class="flex gap-2">
                        <!-- Назад -->
                        <a href="{{ route('people', ['year' => $prevYear]) }}"
                            class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                            ← На {{ $range * 2 }} лет назад
                        </a>

                        <!-- Сегодня -->
                        <a href="{{ route('people') }}"
                            class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700 transition-colors">
                            Сегодня
                        </a>

                        <!-- Вперёд -->
                        <a href="{{ route('people', ['year' => $nextYear]) }}"
                            class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                            На {{ $range * 2 }} лет вперёд →
                        </a>
                    </div>
                </div>
                <div id="visualization"></div>
                <script>
                    var groups = new vis.DataSet(@json($groups));
                    var items = new vis.DataSet(@json($items));

                    var container = document.getElementById("visualization");
                    var options = {
                        start: @json($startDate),
                        end: @json($endDate),
                        height: '60vh',
                        stack: true,
                        locale: 'ru',
                        groupOrder: 'value',
                        margin: { item: 10, axis: 5 },
                        tooltip: {
                            followMouse: true,
                            overflowMethod: 'cap',
                            template: function (item) {
                                return item.title + '<br><small>Двойной клик для перехода</small>';
                            },
                        }
                    };

                    var timeline = new vis.Timeline(container, items, groups, options);

                    timeline.on("doubleClick", function (properties) {
                    if(properties.item){
                        const item = items.get(properties.item);
                        if (item.person_slug) {
                            // Открывать в новой вкладке, если зажата Ctrl/Cmd
                            if (properties.event.ctrlKey || properties.event.metaKey) {
                                window.open(`/people/${item.person_slug}`, '_blank');
                            } else {
                                window.location.href = `/people/${item.person_slug}`;
                            }
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>
</x-guest-layout>