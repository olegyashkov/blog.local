<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public function articles()
	{
		// $articles = $user->articles()->where('')
		return $this->hasMany('App\Article');
	}

	
    //
}
