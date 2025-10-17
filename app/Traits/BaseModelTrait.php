<?php

namespace App\Traits;

use Carbon\Carbon;

trait BaseModelTrait {

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.datetime_format'));
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.datetime_format'));
    }
}
