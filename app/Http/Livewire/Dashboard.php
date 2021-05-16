<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'trips' => Trip::all(),

        ]);
    }
}
