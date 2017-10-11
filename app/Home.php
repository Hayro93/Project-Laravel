<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $primaryKey = 'id';
    public $incrementing = FALSE;
    public $timestamps = TRUE;

    }

