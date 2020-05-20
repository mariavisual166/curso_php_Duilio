<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profession extends Model
{
   
	public function userC()
	{
	    return $this->hasMany(userC::class);
	}
}
