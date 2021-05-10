<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $user_id='';
    public $firstname = '';
    public $lastname = '';
    public $username = '';
    public $avatarUrl = '';
    public $about = '';
 
    public function mount() 
    {
        $this->user_id = auth()->user()->id;
    }
    public function save()
    {
        $profileData = $this->validate([
            'firstname' => 'max:24',
            'lastname' => 'max:24',
            'username' => 'max:24',
            'about' => 'max:140',
        ]);

        auth()->user()->update($profileData);
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
