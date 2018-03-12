<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requeststat extends Model
{
    public function requeststat()
    {
    	return $this->belongsTo(Service::class);
    }
}
