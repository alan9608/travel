<?php

namespace App\Http\Livewire;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithPagination;

class Places extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.places',[
            'places' => Place::orderBy('name')->paginate(10)
        ]);
    }
}
