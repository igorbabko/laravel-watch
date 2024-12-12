<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait Routable
{
    protected function routeUrl(): Attribute
    {
        return Attribute::make(get: fn () => route($this->getTable().'.show', $this));
    }
}
