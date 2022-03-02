<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use App\Models\Place;
use Livewire\Component;
use Livewire\WithPagination;

class Places extends Component
{
    use WithPagination;

    public $search='';
    public $sortField='name';
    public $sortDirection = 'asc';
    public $showPlaceEditor=false;
    public Place $editing;

    protected $queryString = ['sortField','sortDirection'];

    public function rules()
    {
        return [
            'editing.name' => 'required|min:3',
            'editing.country' => 'required|min:3',
            'editing.latitude' => 'numeric',
            'editing.longitude' => 'numeric',
        ];
    }

    public function edit(Place $place)
    {
        if($this->editing->isNot($place)) $this->editing = $place;
        $this->showPlaceEditor = true;
    }

    public function create()
    {
        if($this->editing->getKey()) $this->editing = $this->makeBlankPlace();
        $this->showPlaceEditor=true;
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showPlaceEditor = false;
    }

    public function mount()
    {
        $this->editing = $this->makeBlankPlace();
    }

    public function makeBlankPlace()
    {
        return  Place::make();
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
        return view('livewire.places',[
            'places' => Place::search($this->sortField,$this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10)
        ]);
    }
}
