<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(Request $request)
    {
        // Текущий год для отображения (по умолчанию текущий)
        $currentYear = $request->input('year', now()->year);
        $range = 20;

        $startDate = now()->create($currentYear, 1, 1)->subYears($range);
        $endDate = now()->create($currentYear, 1, 1)->addYears($range);

        $people = People::whereBetween('birth_date', [$startDate, $endDate])
            ->orderBy('birth_date')->get();
        $events = Event::whereNull('eventable_type')->orderBy('started_at')->get();

        $groups = [];
        $items = [];
        $id = 0;

        $groups[] = [
            'id' => 'global_events',
            'content' => 'Global events',
            'value' => 1,
        ];
        $groups[] = [
            'id' => 'people',
            'content' => 'People',
            'value' => 2,
        ];

        foreach ($events as $event) {
            if (is_null($event->ended_at)) {
                // Точечное событие
                $items[] = [
                    'id' => $id++,
                    'content' => ($event->category?->icon() ?? '📌') . ' ' . $event->title,
                    'start' => $event->started_at,
                    'end' => null,
                    'title' => ($event->category?->toString() ?? '') . "<br>" . ($event->description ?? ''),
                    'group' => 'global_events',
                    'className' => 'category-' . ($event->category?->value ?? 'milestone'),
                ];
            } else {
                // Событие с длительностью
                $items[] = [
                    'id' => $id++,
                    'content' => ($event->category?->icon() ?? '📌') . ' ' . $event->title,
                    'start' => $event->started_at,
                    'end' => $event->ended_at,
                    'title' => ($event->category?->toString() ?? '') . "<br>" . ($event->description ?? ''),
                    'type' => 'point',
                    'group' => 'global_events',
                    'className' => 'category-' . ($event->category?->value ?? 'milestone'),
                ];
                $items[] = [
                    'id' => $id++,
                    'content' => ($event->category?->icon() ?? '📌') . ' ' . $event->title,
                    'start' => $event->started_at,
                    'end' => $event->ended_at,
                    'type' => 'background',
                    'className' => 'category-' . ($event->category?->value ?? 'milestone'),
                ];
            }
        }

        foreach ($people as $person) {
            $item = [
                'id' => $id++,
                'start' => $person->birth_date,
                'content' => $person->name . "<br>" . $person->birth_date_formatted . ($person->death_date ? (' - ' . $person->death_date_formatted) : ''),
                'title' => $person->name . "<br>" . $person->biography,
                'person_slug' => $person->slug,
                'className' => $person->death_date ? 'dead' : 'alive',
                'end' => $person->death_date ? $person->death_date : now(),
                'group' => 'people',
                'type' => 'range',
            ];
            $items[] = $item;
        }

        // Навигация по годам
        $prevYear = $currentYear - ($range * 2);
        $nextYear = $currentYear + ($range * 2);

        return view('people.index', compact(
            'people',
            'items',
            'groups',
            'startDate',
            'endDate',
            'currentYear',
            'prevYear',
            'nextYear',
            'range'
        ));
    }

    public function show($slug)
    {
        $person = People::with(['affiliations.organization', 'events'])
            ->where('slug', $slug)
            ->firstOrFail();

        $events = Event::all();

        $items = [];
        $id = 1;

        foreach ($events as $event) {
            $item = [
                'id' => $id++,
                'content' => $event->title,
                'start' => $event->started_at,
                'end' => $event->ended_at ? $event->ended_at : $event->started_at,
                'className' => $event->category,
                'type' => "background",
            ];
            $items[] = $item;
        }

        $items[] = [
            'id' => $id++,
            'content' => "Дата рождения<br>" . $person->birth_date_formatted,
            'start' => $person->birth_date,
            'className' => 'birthday'
        ];

        if ($person->death_date) {
            $items[] = [
                'id' => $id++,
                'content' => "Дата смерти<br>" . $person->death_date_formatted,
                'start' => $person->death_date,
                'className' => 'deathday'
            ];
        }

        // Участие в организациях
        foreach ($person->affiliations as $affiliation) {
            $item = [
                'id' => $id++,
                'content' => $affiliation->organization->name . "<br>" . ($affiliation->role ?? ''),
                'start' => $affiliation->started_at,
            ];
            $item['end'] = $affiliation->ended_at
                ? $affiliation->ended_at->format('Y-m-d')
                : now()->format('Y-m-d');
            $items[] = $item;
        }

        // События
        foreach ($person->events as $event) {
            $items[] = [
                'id' => $id++,
                'content' => $event->title . "<br>" . $event->started_at->format('d.m.Y'),
                'start' => $event->started_at->format('Y-m-d'),
                'type' => 'point',
            ];
        }

        // Диапазон дат
        $startDate = $person->birth_date->subYears(5)->format('Y-m-d');
        $endDate = $person->death_date
            ? $person->death_date->addYears(5)->format('Y-m-d')
            : now()->addYears(5)->format('Y-m-d');

        return view('people.show', compact('person', 'items', 'startDate', 'endDate'));
    }

}
