<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poesia extends Model
{
    protected $table = 'poesias';

    // Relación One To Many
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    // Relacion de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\user', 'user_id');
    }
}
