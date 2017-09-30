<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
use App\Team;
class Core extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function account_edit(Request $request){

        return view('backend.account-edit');
    }

    public function home(Request $request)
    {


        if($request->has('sub')){
            $title = $request->input('title');
            $text = $request->input('text');
            $update = Home::find(2);
            if($request->hasFile('image')) {
                $this->validate($request, [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $path = "images";
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $file->move($path, $name);
                $update->image = $name;
            }
            if($request->has('title')){
                $update->title = $title;
            }
            if($request->has('text')) {
                $update->text = $text;
            }
            $update->save();
        }

        if($request->has('sub1')) {
            $title = $request->input('title1');
            $position = $request->input('position1');
            $desc = $request->input('desc1');
            $update = Team::find(2);
            if($request->hasFile('image1')) {
                $this->validate($request, [
                    'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $path = "images";
                $file = $request->file('image1');
                $name = $file->getClientOriginalName();
                $file->move($path, $name);
                $update->image = $name;
            }else{
                $update->title = $title;
                $update->position = $position;
                $update->desc = $desc;
            }
            $update->save();
        }

        if($request->has('sub2')) {
            $title = $request->input('title2');
            $position = $request->input('position2');
            $desc = $request->input('desc2');
            $update = Team::find(3);
            if($request->hasFile('image2')) {
                $this->validate($request, [
                    'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $path = "images";
                $file = $request->file('image2');
                $name = $file->getClientOriginalName();
                $file->move($path, $name);
                $update->image = $name;
                $update->save();
            }else{
                $update->title = $title;
                $update->position = $position;
                $update->desc = $desc;
            }
            $update->save();
        }

        if($request->has('sub3')) {
            $title = $request->input('title3');
            $position = $request->input('position3');
            $desc = $request->input('desc3');
            $update = Team::find(4);
            if($request->hasFile('image3')) {
                $this->validate($request, [
                    'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $path = "images";
                $file = $request->file('image3');
                $name = $file->getClientOriginalName();
                $file->move($path,$name);
                $update->image = $name;
            }else{
                $update->title = $title;
                $update->position = $position;
                $update->desc = $desc;
            }
            $update->save();
        }
        $array1 = Home::all();
        $array2 = Team::all();
        return view('backend.home')->with(['array1'=>$array1,'array2'=>$array2]);
    }

    public function about(Request $request){
        return view('backend.about');
    }
}
