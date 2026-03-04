<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::paginate(15);
        return view('organizations.index', compact('organizations'));
    }

    public function show($slug)
    {
        $organization = Organization::with(['affiliations.people', 'events'])
            ->where('slug', $slug)
            ->firstOrFail();
        $items = [];
        $id = 1;

        // Дата образования
        $items[] = [
            'id' => $id++,
            'content' => "Образовалась<br>" . $organization->founded_date_formatted,
            'start' => $organization->founded_date,
        ];

        // Дата закрытия
        if ($organization->dissolved_date) {
            $items[] = [
                'id' => $id++,
                'content' => "Закрылась<br>" . $organization->dissolved_date_formatted,
                'start' => $organization->dissolved_date,
            ];
        }

        // Участники
        foreach ($organization->affiliations as $affiliation) {
            $item = [
                'id' => $id++,
                'content' => $affiliation->people->name . "<br>" . ($affiliation->role ?? ''),
                'start' => $affiliation->started_at->format('Y-m-d'),
            ];
            $item['end'] = $affiliation->ended_at
                ? $affiliation->ended_at->format('Y-m-d')
                : now()->format('Y-m-d');
            $items[] = $item;
        }

        // События
        foreach ($organization->events as $event) {
            $items[] = [
                'id' => $id++,
                'content' => $event->title . "<br>" . $event->occurred_at->format('d.m.Y'),
                'start' => $event->occurred_at->format('Y-m-d'),
                'type' => 'point',
            ];
        }

        // Диапазон дат
        $startDate = $organization->founded_date->subYears(5)->format('Y-m-d');
        $endDate = $organization->dissolved_date
            ? $organization->dissolved_date->addYears(5)->format('Y-m-d')
            : now()->addYears(5)->format('Y-m-d');

        return view('organizations.show', compact('organization', 'items', 'startDate', 'endDate'));
    }

}
