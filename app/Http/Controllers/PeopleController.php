<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        return view('people.index');
    }

    public function show($slug)
    {
        $person = People::with(['affiliations.organization', 'events'])
            ->where('slug', $slug)
            ->firstOrFail();
        // Диапазон дат: 5 лет до рождения и 5 лет после смерти (или текущего времени)
        $rangeStart = $person->birth_date->clone()->subYears(5);
        $rangeEnd = $person->death_date
            ? $person->death_date->clone()->addYears(5)
            : now()->addYears(5);
        // Запрашиваем события, которые пересекаются с диапазоном жизни персоны
        $events = Event::whereNull('eventable_type')
            ->whereBetween('started_at', [$rangeStart, $rangeEnd])
            ->whereBetween('ended_at', [$rangeStart, $rangeEnd])
            ->get();
        // Запрашиваем людей, которые пересекаются с диапазоном жизни персоны
        $contemporaries = People::whereBetween('birth_date', [$rangeStart, $rangeEnd])
            ->get();

        //$groups = [];
        $items = [];
        $group_id = 0;
        $item_id = 0;

        // Группа для персоны
        // $groups[] = [
        //     'id' => $group_id,
        //     'content' => 'Вехи в жизни',
        //     'value' => $group_id,
        // ];
        // Дата рождения персоны
        // $items[] = [
        //     'id' => $item_id++,
        //     'content' => "Дата рождения<br>" . $person->birth_date_formatted,
        //     'start' => $person->birth_date,
        //     'className' => 'birthday',
        //     'group' => $group_id,
        // ];

        // Дата смерти персоны
        // if ($person->death_date) {
        //     $items[] = [
        //         'id' => $item_id++,
        //         'content' => "Дата смерти<br>" . $person->death_date_formatted,
        //         'start' => $person->death_date,
        //         'className' => 'deathday',
        //         'group' => $group_id,
        //     ];
        // }

        $items[] = [
            'id' => $item_id++,
            'content' => '',
            'start' => $person->birth_date,
            'end' => $person->death_date ? $person->death_date : now(),
            'type' => 'background',
        ];

        // События связанные с персоной
        foreach ($person->events as $event) {
            $items[] = [
                'id' => $item_id++,
                'content' => $event->started_at->format('d.m.Y') . " - " . $event->title,
                'start' => $event->started_at->format('Y-m-d'),
                'title' => $event->description,
                //'group' => $group_id,
                'type' => 'point',
            ];
        }

        // $group_id++;
        // $groups[] = [
        //     'id' => $group_id,
        //     'content' => 'Всемирные события',
        //     'value' => $group_id,
        // ];

        // Глобальные события
        foreach ($events as $event) {
            $items[] = [
                'id' => $item_id++,
                'content' => $event->title,
                'start' => $event->started_at,
                'end' => $event->ended_at ?? $event->started_at,
                'className' => $event->category,
                'type' => 'background',
                // 'group' => $group_id,
            ];
        }

        // $group_id++;
        // $groups[] = [
        //     'id' => $group_id,
        //     'content' => 'Организации',
        //     'value' => $group_id,
        // ];

        // Участие в организациях
        foreach ($person->affiliations as $affiliation) {
            $item = [
                'id' => $item_id++,
                'content' => $affiliation->organization->name . "<br>" . ($affiliation->role ?? ''),
                'start' => $affiliation->started_at,
                //'group' => $group_id,
            ];
            $item['end'] = $affiliation->ended_at
                ? $affiliation->ended_at->format('Y-m-d')
                : now()->format('Y-m-d');
            $items[] = $item;
        }

        // $group_id++;
        // $groups[] = [
        //     'id' => $group_id,
        //     'content' => 'Современники',
        //     'value' => $group_id,
        // ];

        // Современники
        // foreach ($contemporaries as $contemporary) {
        //     $items[] = [
        //         'id' => $item_id++,
        //         'content' => $contemporary->name,
        //         'start' => $contemporary->birth_date,
        //         'end' => $contemporary->death_date ? $contemporary->death_date : now(),
        //         'group' => $group_id,
        //         'slug' => $contemporary->slug,
        //     ];
        // }

        // return view('people.show', compact('person', 'groups', 'items', 'rangeStart', 'rangeEnd'));
        return view('people.show', compact('person', 'items', 'rangeStart', 'rangeEnd'));
    }
}
