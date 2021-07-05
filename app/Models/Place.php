<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function mysearch($query)
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
    public function getLatitudeAttribute()
    {
        return explode(",",$this->coords)[0] ?? '';
    }
    public function setLatitudeAttribute($val)
    {
        if($this->coords) {
            $ln = explode(',',$this->coords)[1];
        }
        else {
            $ln=0;
        }
        return implode(',',array($val,$ln));
    }
    public function getLongitudeAttribute()
    {
        return explode(",",$this->coords)[1] ?? '';
    }
    public function setLongitudeAttribute($val)
    {
        if($this->coords) {
            $la = explode(',',$this->coords)[0];
        }
        else {
            $la=0;
        }
        return implode(',',array($la,$val));
    }
}
