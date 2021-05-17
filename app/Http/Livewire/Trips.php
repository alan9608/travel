<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use Livewire\Component;

class Trips extends Component
{

    public function render()
    {
        return view('livewire.trips',[
            'trips' => Trip::all(),
        ]);
    }
}
