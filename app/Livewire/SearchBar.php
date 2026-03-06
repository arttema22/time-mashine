<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;
use App\Models\Organization;
use App\Models\Event;

class SearchBar extends Component
{
    public $search = '';
    public $results = [];
    public $showResults = false;
    public $selectedFilter = 'all'; // all, people, organizations, events

    protected $listeners = ['searchCompleted' => '$refresh'];

    public function updatedSearch()
    {
        if (strlen($this->search) >= 2) {
            $this->performSearch();
            $this->showResults = true;
        } else {
            $this->results = [];
            $this->showResults = false;
        }
    }

    public function performSearch()
    {
        $query = strtolower($this->search);
        $this->results = [];

        // Поиск по людям
        if ($this->selectedFilter === 'all' || $this->selectedFilter === 'people') {
            $people = People::where('name', 'LIKE', "%{$query}%")
                ->orWhere('biography', 'LIKE', "%{$query}%")
                ->limit(10)
                ->get()
                ->map(fn($p) => [
                    'type' => 'people',
                    'id' => $p->id,
                    'title' => $p->name,
                    'subtitle' => $p->birth_date ? $p->birth_date_formatted . ' г.р.' : '',
                    'url' => route('people.show', $p->slug)
                ]);
            $this->results = array_merge($this->results, $people->toArray());
        }

        // Поиск по организациям
        if ($this->selectedFilter === 'all' || $this->selectedFilter === 'organizations') {
            $organizations = Organization::where('name', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->limit(10)
                ->get()
                ->map(fn($o) => [
                    'type' => 'organization',
                    'id' => $o->id,
                    'title' => $o->name,
                    'subtitle' => $o->founded_date ? 'Основано: ' . $o->founded_date_formatted : '',
                    'url' => route('organizations.show', $o->slug)
                ]);
            $this->results = array_merge($this->results, $organizations->toArray());
        }

        // Поиск по событиям
        if ($this->selectedFilter === 'all' || $this->selectedFilter === 'events') {
            $events = Event::where('title', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->limit(10)
                ->get()
                ->map(fn($e) => [
                    'type' => 'event',
                    'id' => $e->id,
                    'title' => $e->title,
                    'subtitle' => $e->occurred_at ? 'Дата: ' . $e->occurred_at_formatted : '',
                    'url' => route('events.show', $e->id)
                ]);
            $this->results = array_merge($this->results, $events->toArray());
        }
    }

    public function selectFilter($filter)
    {
        $this->selectedFilter = $filter;
        $this->performSearch();
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->results = [];
        $this->showResults = false;
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
