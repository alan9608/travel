<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class Trips extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'start_date';
    public $sortDirection = 'asc';
    public $showEdit = false;
    public Trip $editing;

    protected $queryString = ['sortField', 'sortDirection'];

    public function rules()
    {
        $checked = [
            'editing.description' => 'required|min:3',
            'editing.date_for_editing' => 'date',
            'editing.start_date' => 'required|date',
            'editing.days' => 'required|numeric|min:1',
            'editing.type_detail' => 'sometimes',
            'editing.type_id' => 'required|in:' . collect(Trip::TYPES)->keys()->implode(','),
        ];
        return  $checked;
    }

    public function edit(Trip $trip)
    {
        if($this->editing) {
            if($this->editing->isNot($trip))
            {
                dd($trip);
                $this->editing = $trip;
            }
        }
        else {
            $this->editing = $trip;
        }
        $this->showEdit = true;
    }


    public function makenew()
    {
        if (!$this->editing->getKey()) {
            $this->editing = $this->makeBlankTrip();
        }
        $this->showEdit = true;
    }

    public function save()
    {
        $this->validate();
        if ($this->editing->id) {
            $this->editing->update();
        } else {
            $this->editing->save();
        }
        $this->showEdit = false;
    }

    public function mount()
    {
        $this->editing = $this->makeBlankTrip();
    }

    public function makeBlankTrip()
    {
        $tripnew = Trip::make(['start_date' => now(), 'type_id' => 1]);
        return $tripnew;
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
            : 'asc';

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.tripsa', [
            'trips' => Trip::search($this->sortField, $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(11)
        ]);
    }
}
