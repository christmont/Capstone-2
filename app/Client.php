<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
  
    public function language()
    {
    	return $this->hasMany(Language::class);
    }
    public function religion()
    {
    	return $this->hasOne(Religion::class);
    }
     public function citizenship()
    {
    	return $this->hasMany(Citizenship::class);
    }
    public function education()
    {
    	return $this->hasOne(Education::class);
    }
    
    public function employeeclients()
    {
    	return $this->hasMany(employeeclients::class);
    }
        public function interviewee()
    {
    	return $this->hasOne(Interviewee::class);
    }
     public function casetobehandled()
    {
        return $this->hasMany(casetobehandled::class);
    }
    public function adverse()
    {
        return $this->hasMany(clientadverse::class);
    }
  


}
