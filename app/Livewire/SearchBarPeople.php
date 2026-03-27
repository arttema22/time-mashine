<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;
use Illuminate\Support\Facades\DB;

class SearchBarPeople extends Component
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
        $this->results = $people->toArray();
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->results = [];
        $this->showResults = false;
    }

    public function render()
    {
        return view('livewire.search-bar-people');
    }
}
