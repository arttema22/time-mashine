<?php

namespace App\Http\Controllers;

use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::paginate(15);
        return view('people.index', compact('people'));
    }

    public function show($slug)
    {
        $person = People::with(['affiliations.organization', 'events'])
            ->where('slug', $slug)
            ->firstOrFail();

        $items = [];
        $id = 1;

        // Дата рождения
        $items[] = [
            'id' => $id++,
            'content' => "Родился<br>" . $person->birth_date->format('d.m.Y'),
            'start' => $person->birth_date->format('Y-m-d'),
        ];

        // Дата смерти
        if ($person->death_date) {
            $items[] = [
                'id' => $id++,
                'content' => "Дата смерти<br>" . $person->death_date->format('d.m.Y'),
                'start' => $person->death_date->format('Y-m-d'),
            ];
        }

        // Участие в организациях
        foreach ($person->affiliations as $affiliation) {
            $item = [
                'id' => $id++,
                'content' => $affiliation->organization->name . "<br>" . ($affiliation->role ?? ''),
                'start' => $affiliation->started_at->format('Y-m-d'),
            ];

            if ($affiliation->ended_at) {
                $item['end'] = $affiliation->ended_at->format('Y-m-d');
            }

            $items[] = $item;
        }

        // События
        foreach ($person->events as $event) {
            $items[] = [
                'id' => $id++,
                'content' => $event->title . "<br>" . $event->occurred_at->format('Y-m-d'),
                'start' => $event->occurred_at->format('Y-m-d'),
                'type' => 'point',
            ];
        }

        // Диапазон дат
        $startDate = $person->birth_date->copy()->subYears(5)->format('Y-m-d');
        $endDate = $person->death_date
            ? $person->death_date->copy()->addYears(5)->format('Y-m-d')
            : now()->format('Y-m-d');

        return view('people.show', compact('person', 'items', 'startDate', 'endDate'));
    }

}
