<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function search($query)
    {
        return empty($query) ?
            static::query() :
            static::where(function($q) use ($query) {
                    $q->where('name', 'LIKE',  $query . '%')
                      ->orWhere('country', 'LIKE', $query . '%');
                    }
                );
    }

    public function trips()
    {
        return $this->belongsToMany(Trip::class)
            ->withPivot([
                'trip_id',
                'place_id',
                'visit_date'
            ]);
    }

}
