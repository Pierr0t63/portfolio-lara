<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'user_id','name','description','url_img','url_ext',
	];

	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
