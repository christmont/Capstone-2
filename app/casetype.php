<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casetype extends Model
{
	 public function Lawsuit()
    {
    	return $this->hasMany(Lawsuit::class);
    }
    public function casetobehandled()
    {
    	return $this->belongsTo(casetobehandled::class);
    }
   
}
