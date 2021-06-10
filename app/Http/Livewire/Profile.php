<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $firstname = '';
    public $lastname = '';
    public $username = '';
    public $birthday = null;
    public $upload;
    public $about = '';

    protected $rules = [
        'firstname' => 'max:24',
        'lastname' => 'max:24',
        'username' => 'max:14',
        'birthday' => 'date',
        'about' => 'max:250',
        'upload' => 'max:1000'
    ];

    public function save()
    {
        $this->validate([
            'username' => 'max:14|unique:users,username,' . auth()->user()->id,
            'firstname' => 'max:24',
            'lastname' => 'max:24',
            'birthday' => 'date',
            'about' => 'max:250',
            'upload' => 'max:1000',
        ]);
        $this->upload &&
            $filename = $this->upload->store('/', 'avatars');

            auth()->user()->update([
                'username' => $this->username,
                'birthday' => $this->birthday,
                'avatar' => $filename ?? '',
            ]);
            auth()->user()->details()->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'username' => $this->username,
                'birthday' => $this->birthday,
                'about' => $this->about,
                'portrait' => $filename ?? '',
            ]);

        $this->emitSelf('notify-saved');
    }


    public function mount()
    {
        $this->username = auth()->user()->username;
        $this->about = auth()->user()->about;
        $this->upload = auth()->user()->photo;
        $this->birthday = optional(auth()->user()->birthday)->format('Y/m/d');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
