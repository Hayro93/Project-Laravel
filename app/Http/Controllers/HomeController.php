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
        $imagename = $request->input('image');
        $file = $request->file('image');
        $sub1 = $request->input('sub1');
        $title = $request->input('title');
        $text = $request->input('text');
        $sub2 = $request->input('sub2');

        if($request->has(['sub1','image'])){
            $destinationPath = app_path()."/Admin/";
            $file = $request->file('image') -> move($destinationPath);
            $update = Home::find(2);
            $update -> image = $imagename;
            $update -> save();
        }
        if($request->has(['sub2'])) {
            $update = Home::find(2);
            $update->title = $title;
            $update->text = $text;
            $update->save();
        }

        $array1 = Home::all();
        return view('backend.home')->with(['array1'=>$array1]);
    }

}
