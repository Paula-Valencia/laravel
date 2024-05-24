<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

     // Relacion Uno a Muchos con Post
     public function posts(){
        return $this->hasMany('App\Models\Post');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }
}
