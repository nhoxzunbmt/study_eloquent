<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
	public $timestamps = false;
	public function car()
	{
		return $this->hasOne(Cars::class);
	}
}
