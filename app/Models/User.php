<?php

namespace App\Models;

use App\Models\Profile;
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
    protected $fillable = [
        'email',
        'password',
    ];

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

    public function avatarUrl()
    {
        $gravitar = 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
        return $this->avatar
            ? Storage::disk('avatar')->url($this->avatar)
            : $gravitar;
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
