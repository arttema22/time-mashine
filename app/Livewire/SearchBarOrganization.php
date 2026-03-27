<?php

namespace App\Livewire;

use App\Models\Organization;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SearchBarOrganization extends Component
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
        $this->results = $organizations->toArray();
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->results = [];
        $this->showResults = false;
    }

    public function render()
    {
        return view('livewire.search-bar-organization');
    }
}
