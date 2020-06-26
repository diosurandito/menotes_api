<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

	protected $fillable = ['id_user', 'id_category', 'title', 'description', 'date'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
