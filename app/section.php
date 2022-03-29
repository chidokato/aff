<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $table = "section";
	public function articles()
	{
		return $this->belongsTo('App\articles','articles_id','id');
	}
}
