<?php

namespace App\Http\Livewire;

use App\Models\Details;
use Livewire\Component;
use Livewire\WithFileUploads;

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

    protected $rules = [
        'firstname' => 'max:24',
        'lastname' => 'max:24',
        'username' => 'max:14',
        'birthday' => 'date',
        'about' => 'max:250',
        'upload' => 'max:1000|image'
    ];

    public function save()
    {
        $this->validate([
            'username' => 'max:14|unique:users,username,' . auth()->user()->id,
            'firstname' => 'max:24',
            'lastname' => 'max:24',
            'birthday' => 'date',
            'about' => 'max:250',
            'upload' => 'max:1000|image',
            'portrait' => 'max:1000|image',
        ]);
        $this->upload &&
            $filename = $this->upload->store('/', 'avatars');

        auth()->user()->update([
            'username' => $this->username,
        ]);
        auth()->user()->details()->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'birthday' => $this->birthday,
            'about' => $this->about,
            'portrait' => $filename ?? $this->portrait,
        ]);

        $this->emitSelf('notify-saved');
    }


    public function mount()
    {
        $this->username = auth()->user()->username;
        $details = Details::where('user_id','=',auth()->user()->id)->first();
        $this->firstname = $details->firstname;
        $this->lastname = $details->lastname;
        $this->birthday = $details->birthday;
        $this->about = $details->about;
        $this->portrait = $details->portrait;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
