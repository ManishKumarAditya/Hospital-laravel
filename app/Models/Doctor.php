<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded=[];
   public function getUser(){
       return $this->hasOne('App\Models\User','id','user_id');
   }
   public function getPatients(){
       return $this->hasMany('App\MOdels\Patient','doctor_id','id');
   }

}
