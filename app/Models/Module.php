<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos con alumno
    public function student(){
        return $this->hasMany('App\Models\Student');
    }
    //Relacion de uno a uno con profesor
    public function teacher(){
        return $this->hasMany('App\Models\Teacher');
    }
}
