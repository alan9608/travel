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

    protected $rules = [
        'firstname' => 'max:24',
        'lastname' => 'max:24',
        'username' => 'max:24',
        'about' => 'max:140',
        'avatarUrl' => 'max:140'
    ];

    public function mount()
    {
        $this->user_id = auth()->user()->id;
        // $this->firstname = auth()->user()->profile()->firstname;
    }
    public function save()
    {
        $profileData = $this->validate();

        auth()->user()->profile()->update($profileData);
        $this->emitSelf('notify-saved');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
