<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    public function Tenants(){
    	return $this->hasOne('App\Tenants');
    }
}
