<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;
use App\Models\Organization;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class SearchBar extends Component
{
    public $search = '';
    public $results = [];
    public $showResults = false;
    public $selectedFilter = 'all';
    
    /**
     * Тип поиска: all, people, organizations, events
     * Определяет, по какой сущности искать и какие фильтры показывать
     */
    public $searchType = 'all';

    protected $listeners = ['searchCompleted' => '$refresh'];

    public function mount($searchType = 'all')
    {
        $this->searchType = $searchType;
        $this->selectedFilter = $searchType;
    }

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
        $this->results = [];

        // Определяем активный фильтр: если searchType !== 'all', используем его, иначе selectedFilter
        $activeFilter = $this->searchType === 'all' ? $this->selectedFilter : $this->searchType;

        // Поиск по людям
        if ($activeFilter === 'all' || $activeFilter === 'people') {
            $people = People::where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($this->search) . '%')
                ->limit(10)
                ->get()
                ->map(fn($p) => [
                    'type' => 'people',
                    'id' => $p->id,
                    'title' => $p->name,
                    'subtitle' => $p->birth_date_formatted . ($p->death_date ? ' - ' . $p->death_date_formatted : ''),
                    'url' => route('people.show', $p->slug)
                ]);
            $this->results = array_merge($this->results, $people->toArray());
        }

        // Поиск по организациям
        if ($activeFilter === 'all' || $activeFilter === 'organizations') {
            $organizations = Organization::where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($this->search) . '%')
                ->limit(10)
                ->get()
                ->map(fn($o) => [
                    'type' => 'organization',
                    'id' => $o->id,
                    'title' => $o->name,
                    'subtitle' => $o->founded_date_formatted . ($o->ended_at ? ' - ' . $o->dissolved_date_formatted : ''),
                    'url' => route('organization.show', $o->slug)
                ]);
            $this->results = array_merge($this->results, $organizations->toArray());
        }

        // Поиск по событиям
        if ($activeFilter === 'all' || $activeFilter === 'events') {
            $events = Event::where(DB::raw('LOWER(title)'), 'LIKE', '%' . strtolower($this->search) . '%')
                ->limit(10)
                ->get()
                ->map(fn($e) => [
                    'type' => 'event',
                    'id' => $e->id,
                    'title' => $e->title,
                    'subtitle' => $e->started_at_formatted . ($e->ended_at ? ' - ' . $e->ended_at_formatted : ''),
                    'url' => route('event.show', $e->slug)
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
        return view('livewire.search-bar', [
            'searchType' => $this->searchType,
            'showFilters' => $this->searchType === 'all',
        ]);
    }
}
