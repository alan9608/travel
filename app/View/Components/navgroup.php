<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navgroup extends Component
{
    public $menu[
        trip => [
            label => 'Trips',
            uri => '/trips',
        ],
        place => [
            label => 'Places',
            uri => '/places',
        ],
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navgroup');
    }
}
