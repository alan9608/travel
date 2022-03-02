<?php

namespace App\Models;

use App\Models\Place;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;
    /**
   * Users' types
   *
   * @var array
   */
    const TYPES = [
        0  => 'other',
        1  => 'cruise',
        2  => 'driving',
        3  => 'destination',
        4  => 'tour',
        5  => 'train',
     ];

     public $timestamps = false;

    protected $casts = [
        'start_date' => 'date',
        'date_for_humans' => 'date',
        'date_for_editing' => 'date'
    ];

    protected $guarded = [];
    protected $appends = ['date_for_humans', 'date_for_editing'];

    public function places()
    {
        return $this->belongsToMany(Place::class)
            ->withPivot([
                'trip_id',
                'place_id',
                'visit_date'
            ]);
    }

    /**
    * returns the id of a given type
    *
    * @param string $type  user's trip type
    * @return int typeID
    */
    public static function getTypeID($type)
    {
        return array_search($type, self::TYPES) ?? 0;
    }

    /**
    * get user type
    */
    public function getTypeNameAttribute()
    {
        return self::TYPES[ $this->attributes['type_id'] ];
    }

    /**
    * set user type
    */
    public function setTypeNameAttribute($value)
    {
        $this->type_id = self::getTypeID($value) ?? 0;
    }

    public function getDateForHumansAttribute()
    {
        return $this->start_date->format('M j, Y');
    }

    public function setDateForHumansAttribute($value)
    {
        $this->start_date = Carbon::parse($value);
    }

    public function getDateForEditingAttribute()
    {
        return $this->start_date->format('Y/m/d');
    }

    public function setDateForEditingAttribute($value)
    {
        if ($value){
            $this->start_date = Carbon::parse($value);
        }
    }

}
