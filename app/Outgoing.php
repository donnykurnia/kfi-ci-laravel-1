<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outgoing extends Model
{
    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
}
