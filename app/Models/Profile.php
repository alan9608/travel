<?php

namespace App\Models;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Support\Carbon;
>>>>>>> c0afbca72cf456c1bf90fa3291ade101b36dbf93
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $casts = [
        'birthday' => 'date',
    ];

<<<<<<< HEAD
    public function addUserProfile()
    {
        $user = new User;
        $user->username = 'eawilson';
        $user->email = 'eawilson@ualberta.ca';
        $user->password = Hash::make('password');
        $user->save();

        $details = new Profile;
        $details->firstname = "Alan";
        $details->lastname = "Wilson";
        $details->username = "eawilson";
        $details->portrait = "9D76n8aWh5luwvpC7Ob7ptMMNv2fyXQqvN3K8TqJ.jpg";
        $details->birthday = "1950-05-27";
        $user->details()->save($details);

=======
    public function getDateForEditingAttribute()
    {
        return $this->birthday->format('Y-m-d');
    }

    public function setDateForEditingAttribute($value)
    {
        $this->birthday = Carbon::parse($value);
>>>>>>> c0afbca72cf456c1bf90fa3291ade101b36dbf93
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
