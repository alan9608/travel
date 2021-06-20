<?php

namespace App\Http\Livewire;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithPagination;

class Places extends Component
{
    use WithPagination;

    public $showPlaceEditor=false;
    public Place $editing;

    public function edit(Place $place)
    {
        $this->editing = $place;
        $this->showPlaceEditor = true;
    }

    public function mount()
    {
        $this->editing = Place::find(134);
    }

    public function render()
    {
        return view('livewire.places',[
            'places' => Place::orderBy('name')->paginate(10)
        ]);
    }
}
