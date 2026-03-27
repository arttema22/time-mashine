<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SearchBarEvent extends Component
{
    public $search = '';
    public $results = [];
    public $showResults = false;

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
        $this->results = [];
        $events = Event::where(DB::raw('LOWER(title)'), 'LIKE', '%' . strtolower($this->search) . '%')
            ->limit(10)
            ->get()
            ->map(fn($e) => [
                'type' => 'event',
                'id' => $e->id,
                'title' => $e->title,
                // 'subtitle' => $e->founded_date_formatted . ($e->ended_at ? ' - ' . $e->dissolved_date_formatted : ''),
                // 'url' => route('event.show')
            ]);
        $this->results = $events->toArray();
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->results = [];
        $this->showResults = false;
    }

    public function render()
    {
        return view('livewire.search-bar-event');
    }
}
