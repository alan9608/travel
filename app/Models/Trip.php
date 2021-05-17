<?php

namespace App\Models;

use Carbon\Carbon;
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
        1  => 'cruise',
        2  => 'driving',
        3  => 'destination',
        4  => 'tour',
        5  => 'train',
        10 => 'other'
     ];

     public $timestamps = false;

    protected $casts = [
        'start_date' => 'date'
    ];

    protected $guarded = [];

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
    * @param string $type  user's type
    * @return int typeID
    */
    public static function getTypeID($type)
    {
        return array_search($type, self::TYPES);
    }   /**
    * get user type
    */
    public function getTypeAttribute()
    {
        return self::TYPES[ $this->attributes['type_id'] ];
    }   /**
    * set user type
    */
    public function setTypeAttribute($value)
    {
        $typeID = self::getTypeID($value);
        if ($typeID) {
            $this->attributes['type_id'] = $typeID;
        }
    }
    public function getDateForHumansAttribute()
    {
        return $this->start_date->format('M, d Y');
    }

    public function getDateForEditingAttribute()
    {
        return $this->start_date->format('YYYY/MM/DD');
    }

    public function setDateForEditingAttribute($value)
    {
        $this->start_date = Carbon::parse($value);
    }

}
