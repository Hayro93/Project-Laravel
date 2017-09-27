<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $title = $request->input('title');
        $text = $request->input('text');

        if($request->has(['sub1'])){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $path = "images";
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move($path,$name);

            $update = Home::find(2);
            $update -> image = $name;
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
