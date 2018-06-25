<?php

namespace Tightenco\Parental\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Tightenco\Parental\ReturnsChildModels;

class VehicleWithScopes extends Model
{
    use ReturnsChildModels;
}
