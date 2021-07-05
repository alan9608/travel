<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class Trips extends Component
{
    use WithPagination;

    public $search='';
    public $sortField;
    public $sortDirection = 'asc';
    public $showEditModal = false;
    public $editing;

    protected $queryString = ['sortField','sortDirection'];

    public function rules()
    {
        return [
            'editing.description' => 'required|min:3',
            'editing.start_date' => 'required|date',
            'editing.days' => 'required|min:1',
            // 'editing.type' => 'required|in:'.collect(Trip::TYPES)->keys()->implode(','),
        ];
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
            : 'asc';

        $this->sortField = $field;
    }

    public function edit(Trip $trip)
    {
        $this->editing = $trip;
        $this->showEditModal = true;
    }

    public function render()
    {
        return view('livewire.tripsa',[
            'trips' => Trip::orderBy('start_date')->paginate(12)
        ]);
    }
}
