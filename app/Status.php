<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function approvedcase()
    {
    	return $this->belongsTo(approvedcase::class);
    }
}
