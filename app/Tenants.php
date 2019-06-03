<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
   protected $fillable=['ID_NO', 'Firstname', 'Lastname', 'Gender', 'Location', 'Address', 'Phone_Number', 'Profile_pic', 'House_No',];
  protected $primaryKey = 'ID_NO';
   public function Houses(){
   	  return $this->belongsTo('App\Houses');
   	}
   	  public function Payments(){
   	  	return $this->hasOne('App\payments');
   	  }
   
}
