<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Details extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $casts = [
        'birthday' => 'date',
    ];

    public function addUserDetails()
    {
        $user = new User;
        $user->username = 'eawilson';
        $user->email = 'eawilson@ualberta.ca';
        $user->password = Hash::make('password');
        $user->save();

        $details = new Details;
        $details->firstname = "Alan";
        $details->lastname = "Wilson";
        $details->username = "eawilson";
        $details->portrait = "9D76n8aWh5luwvpC7Ob7ptMMNv2fyXQqvN3K8TqJ.jpg";
        $details->birthday = "1950-05-27";
        $user->details()->save($details);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
