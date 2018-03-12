<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeeclients extends Model
{
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
    public function employee()
    {
    	return $this->belongsTo(Employee::class);
    }


}
