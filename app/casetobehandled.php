<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casetobehandled extends Model
{
     public function client()
    {
    	return $this->belongsTo(Client::class);
    }
    
     public function approvedcase()
    {
    	return $this->belongsTo(approvedcase::class);
    }


}
