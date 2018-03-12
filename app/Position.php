<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
     public function employee()
    {
    	return $this->belongsTo(Employee::class);
    }}
