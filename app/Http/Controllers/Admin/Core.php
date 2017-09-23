<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about(){
        return view('backend.about');
    }
}
