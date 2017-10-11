<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $incrementing = FALSE;
    public $timestamps = TRUE;
    public function user(){
       //return $this->belongsTo('App\User');   //
    }
}
