<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Home;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $image = $request->input('image');
        $sub1 = $request->input('sub1');
        $title = $request->input('title');
        $text = $request->input('text');
        $sub2 = $request->input('sub2');
        $array1 = Home::all();
        if($request->has(['sub1','image'])){
            $update = Home::find(1);
            $update -> image =$image;
            $update -> save();
        }
        if($request->has('sub2')){
            $update = Home::find(1);
            $update->title = $title;
            $updata->text = $text;
            $update->save();
        }
        return view('backend.home')->with(['array1'=>$array1]);
    }

}
