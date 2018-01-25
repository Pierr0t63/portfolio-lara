<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'user_id','last_name','first_name','age','city',
	];

	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
