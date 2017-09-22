<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contry extends Model
{
    public function user(){
        return $this->belongsTo('App\User');  //patkanum e
    }
}
