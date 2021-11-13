<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campaign;

class Country extends Model
{
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
