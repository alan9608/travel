<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
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
        'email_verified_at' => 'datetime'
    ];

        // src="9D76n8aWh5luwvpC7Ob7ptMMNv2fyXQqvN3K8TqJ.jpg"
    public function avatarUrl()
    {
        $details = auth()->user()->profile;
        return $details->picture
            ? Storage::disk('avatars')->url($details->picture)
            : 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }

    // public function getFirstnameAttribute()
    // {
    //     return $this->profile()->firstname;
    // }
    // public function getLastnameAttribute()
    // {
    //     return $this->profile()->lastname;
    // }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


}
