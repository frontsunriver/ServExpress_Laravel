<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class Campaign extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}