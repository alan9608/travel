<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Address extends Component
{
    public $country = '';
    public $street1 = '';
    public $apartment = '';
    public $city = 'Edmonton';
    public $province = 'Alberta';
    public $postal = '';

    protected $rules = [
        'country' => '',
        'street1' => '',
        'apartment' => '',
        'city' => '',
        'province' => '',
        'postal' => '',
    ];

    public function save()
    {
        $addressData = $this->validate();

        auth()->user()->address()->update($addressData);
    }

    public function render()
    {
        return view('livewire.address');
    }
}
