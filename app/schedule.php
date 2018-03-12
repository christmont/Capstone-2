<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
      public function lawyer()
    {
    	return $this->belongsTo(Lawyer::class);
    }
}
