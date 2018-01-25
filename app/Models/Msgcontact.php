<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Msgcontact extends Model
{

	protected $fillable = [
		'category_id','last_name','first_name','email','phone','subject','message',
	];

	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'mail_list';

	public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
