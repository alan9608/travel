<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Carbon;
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

    public function getDateForEditingAttribute()
    {
        return $this->birthday->format('Y-m-d');
    }

    public function setDateForEditingAttribute($value)
    {
        $this->birthday = Carbon::parse($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
