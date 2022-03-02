<?php

namespace App\Models;

use App\Models\Details;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
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

    public function avatarUrl()
    {
        $details = Details::firstOrCreate([
            'user_id' => auth()->user()->id
        ]);

        return $details->portrait
            ? Storage::disk('avatars')->url($details->portrait)
            : 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }

    public function getFirstnameAttribute()
    {
        return $this->details()->firstname;
    }
    public function getlastnameAttribute()
    {
        return $this->details()->lastname;
    }

    public function getBirthdayForEditingAttribute()
    {
        return $this->details()->birthday->format('Y-m-d');
    }

    public function setBirthdayForEditingAttribute($value)
    {
        $this->details()->birthday = Carbon::parse($value);
    }

    public function details()
    {
        return $this->hasOne(Details::class);
    }


}
