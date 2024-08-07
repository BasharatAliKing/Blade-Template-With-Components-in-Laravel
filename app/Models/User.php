<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $guarded=[];
     
    public function getNameAttribute($value){
    return ucwords($value);
    }
    public function setNameAttribute($value){
    $this->attributes['name']=ucwords($value);
    }
    public function setEmailAttribute($value){
        $this->attributes['email']=strtolower($value);
    }
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }

}
