<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $primaryKey = 'id';
    public $incrementing = FALSE;
    public $timestamps = TRUE;
}
