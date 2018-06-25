<?php

namespace Tightenco\Parental\Tests\Models;

use Tightenco\Parental\HasParentModel;
use Tightenco\Parental\Tests\Scopes\CarScope;

class CarWithScope extends Vehicle
{
    use HasParentModel;

    public static function boot()
    {
        parent::boot();

        self::addGlobalScope(new CarScope);
    }
}
