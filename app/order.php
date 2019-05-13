<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function transactions()
	{
		return $this->hasMany('App\Transaction');
	}
	public function user(){
		return $this->belongsTo(User::class, 'user_id');
   }
}
