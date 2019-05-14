<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function transactions()
	{
		return $this->hasMany('App\Transaction');
	}
}
