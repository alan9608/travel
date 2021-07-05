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
    public $lat=0;
    public $lng=0;

   public function rules()
    {
        return [
            'editing.name' => 'required|min:3',
            'editing.country' => 'required|min:3',
            'lat' => 'numeric',
            'lng' => 'numeric',
            // 'editing.type' => 'required|in:'.collect(Trip::TYPES)->keys()->implode(','),
        ];
    }

    public function edit(Place $place)
    {
        $this->editing = $place;
        $this->lat = explode(',',$place->coords)[0];
        $this->lng = explode(',',$place->coords)[1];
        $this->showPlaceEditor = true;
        $this->render();
    }

    public function handle()
    {
        $this->showPlaceEditor=false;
    }

    public function save()
    {
        $this->validate();
        $coords = $this->lat.','.$this->lng;
        dd($coords);
    }

    public function mount()
    {
        $this->editing = Place::find(134);
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
        sleep(0.5);
        return view('livewire.places',[
            'places' => Place::search('name',$this->search)->paginate(10)
        ]);
    }
}
