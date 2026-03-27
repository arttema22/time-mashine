<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index()
    {
        return view('organizations.index');
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
            'content' => "Образовалась<br>" . $organization->started_at_formatted,
            'start' => $organization->started_at,
        ];

        // Дата закрытия
        if ($organization->ended_at) {
            $items[] = [
                'id' => $id++,
                'content' => "Закрылась<br>" . $organization->ended_at_formatted,
                'start' => $organization->ended_at,
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
                'content' => $event->title . "<br>" . $event->started_at->format('d.m.Y'),
                'start' => $event->started_at->format('Y-m-d'),
                'type' => 'point',
            ];
        }

        // Диапазон дат
        $startDate = $organization->started_at->subYears(5)->format('Y-m-d');
        $endDate = $organization->ended_at
            ? $organization->ended_at->addYears(5)->format('Y-m-d')
            : now()->addYears(5)->format('Y-m-d');

        return view('organizations.show', compact('organization', 'items', 'startDate', 'endDate'));
    }
}
