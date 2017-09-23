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
    public function edithome(){
        $image = $request->input('image');
        $sub1 = $request->input('sub1');
        $title = $request->input('title');
        $text = $request->input('text');
        $sub2 = $request->input('sub2');

        if($request->has(['sub1','image'])){
            $update = Home::find(1);
            $update -> image = $image;
            $update -> save();
        }
        if($request->has('sub2')){
            $update = Home::find(1);
            $update->title = $title;
            $updata->text = $text;
            $update->save();
        }
        return view('backend.home');

    }
    public function about(){
        return view('backend.about');
    }
}
