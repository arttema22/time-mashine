<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->firstOrFail();

        // Диапазон дат: 5 лет до события и 5 лет после события
        $rangeStart = $event->started_at->clone()->subYears(5);
        $rangeEnd = $event->ended_at
            ? $event->ended_at->clone()->addYears(5)
            : $event->started_at->clone()->addYears(5);

        $items = [];
        $item_id = 0;

        $items[] = [
            'id' => $item_id++,
            'content' => 'test',
            'start' => $event->started_at_formatted,
            'end' => $event->ended_at ? $event->ended_at_formated : $event->started_at_formatted,
            // 'type' => 'background',
        ];

        return view('events.show', compact('event', 'items', 'rangeStart', 'rangeEnd'));
    }
}
