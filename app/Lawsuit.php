<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawsuit extends Model
{
     public function casetobehandled()
    {
    	return $this->belongsTo(casetobehandled::class);
    }
     public function casetype()
    {
    	return $this->belongsTo(casetype::class);
    }
}
