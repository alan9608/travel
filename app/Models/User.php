<?php

namespace App\Models;

use App\Models\Details;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date',
    ];
    public function addUserDetails()
    {
        $user = new User;
        $user->username = 'eawilson';
        $user->email = 'eawilson@ualberta.ca';
        $user->password = Hash::make('123456');
        $user->save();

        $details = new Details;
        $details->firstname = "Alan";
        $details->lastname = "Wilson";
        $details->username = "eawilson";
        $details->portrait = "9D76n8aWh5luwvpC7Ob7ptMMNv2fyXQqvN3K8TqJ.jpg";
        $details->birthday = "1950-05-27";
        $user->details()->save($details);

    }

    public function avatarUrl()
    {
        $details = Details::where('user_id','=',auth()->user()->id)->first();
        return $details->portrait
            ? Storage::disk('avatars')->url($details->portrait)
            : 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }
    public function details()
    {
        return $this->hasOne(Details::class);
    }


}
