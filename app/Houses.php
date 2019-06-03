<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
	protected $primaryKey = 'house_No';
    public function Tenants(){
    	 return $this->belongsTo('App\Tenants');
    }
}
