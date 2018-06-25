<?php

namespace Tightenco\Parental\Tests\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CarScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('seats', '<', 4);
    }
}
