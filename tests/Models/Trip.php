<?php

namespace Tightenco\Parental\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Tightenco\Parental\HasChildren;

class Trip extends Model
{
    use HasChildren;

    public $createdEventTimesRan = 0;

    protected $childColumn = 'trip_type';

    public $childTypes = [
        'international_trip' => InternationalTrip::class
    ];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($model) {
            $model->createdEventTimesRan++;
        });
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
