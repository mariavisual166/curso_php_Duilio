<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userC extends Model
{
	public static function profession (){

		return $this->belongsTo(profession::class);
	}

	protected $fillable = [
        'name', 'email', 'password','profession_id',
    ];
}
