<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adverse extends Model
{
    public function clientadverse()
    {
    	return $this->hasMany(clientadverse::class);
    }
    
}
