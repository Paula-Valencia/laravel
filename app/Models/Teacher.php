<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos con Modulo
    public function module(){
        return $this->hasOne('App\Models\Modules');
    }

}
