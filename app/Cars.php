<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
	public $timestamps = false;
	public function owners()
	{
		return $this->belongsTo(Owners::class);
	}

}
