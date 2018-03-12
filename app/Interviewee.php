<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewee extends Model
{
      public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
