<?php

namespace App\Http\Livewire;

use App\Models\Details;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class Profile extends Component
{
    use WithFileUploads;

    public $firstname = '';
    public $lastname = '';
    public $username = '';
    public $birthday = '';
    public $upload;
    public $portrait;
    public $about = '';

    public function save()
    {
        $details = $this->validate([
            'username' => 'max:14|unique:users,username,' . auth()->user()->id,
            'upload' => 'max:5000',
            'username' => 'max:14',
            'birthday' => 'date',
            'about' => 'max:250',
            'portrait' => 'sometimes',
        ]);
        $this->upload &&
            $filename = $this->upload->store('/', 'avatars');

        $fields = Details::where('user_id',auth()->user()->id)->first()->update($details);

        // auth()->user()->details()->update([
        //     'firstname' => $this->firstname,
        //     'lastname'  => $this->lastname,
        //     'username'  => $this->username,
        //     'birthday'  => $this->birthday,
        //     'about'     => $this->about,
        //     'portrait'  => $filename ?? $this->portrait,
        // ]);

        $this->emitSelf('notify-saved');
    }


    public function mount()
    {
        $details = Details::firstOrCreate(['user_id' => auth()->user()->id]);
        $this->firstname    = $details->firstname;
        $this->lastname     = $details->lastname;
        $this->username     = $details->username;
        $this->birthday     = $details->birthday;
        $this->about        = $details->about;
        $this->portrait     = $details->portrait;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
