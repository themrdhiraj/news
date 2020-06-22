<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    public function subType()
    {
    	return $this->hasMany('App\NewsType', 'p_id');
    }
}
