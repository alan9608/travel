<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class Trips extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.trips',[
            'trips' => Trip::orderBy('start_date')->paginate(15)

        ]);
    }
}
