<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class Profiles extends Component
{
    use WithFileUploads;

    public $showEdit = false;
    public $newAvatar;
    public Profile $profile;

    public function rules()
    {
        return [
            'profile.firstname' => 'max:20',
            'profile.lastname'  => 'max:30',
            'profile.username'  => 'max:14',
            'profile.birthday'  => 'date',
            'profile.about'     => 'max:250',
            'profile.picture'   => 'sometimes',
            'newAvatar'         => 'image|max:500'
        ];
    }


    public function save()
    {
        $this->validate([
            'profile.firstname' => 'required|max:20',
            'profile.lastname'  => 'required|max:30',
            'profile.username'  => 'max:14',
            'profile.birthday'  => 'date',
            'profile.about'     => 'max:199',
            'newAvatar' => 'sometimes'
        ]);

        if($this->newAvatar) {
            $filename = $this->newAvatar->store('/', 'avatars');
        } else {
            $filename = $this->profile->picture;
        }

        auth()->user()->profile()->update([
            'firstname' => $this->profile->firstname,
            'lastname'  => $this->profile->lastname,
            'username'  => $this->profile->username,
            'birthday'  => $this->profile->birthday,
            'about'     => $this->profile->about,
            'picture'    => $filename
        ]);

        $this->emitSelf('notify-saved');
    }


    public function updatedNewAvatar()
    {
        $this->validate(['newAvatar' => 'image | max:30']);
    }

    public function mount()
    {
        $this->profile = auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profiles');
    }
}
