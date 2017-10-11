<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Home;
use App\Team;
use App\User;
use App\Contry;
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

        $id_auth_user = Auth::user()->id;
        $user = User::find($id_auth_user);
        $id = $user->id;
        if($request->has('sub')){
            $title = $request->input('title');
            $text = $request->input('text');
            $update = Home::find(1); //
            $rec = Home::foo();
            if($request->hasFile('image')) {
                $this->validate($request, [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $path = "images";
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $file->move($path, $name);
                $update->image = $name;
                $update->user_id = $id;
            }
            if($request->has('title')){
                $update->title = $title;
                $update->user_id = $id;
            }
            if($request->has('text')) {
                $update->text = $text;
                $update->user_id = $id;
            }
            $update->save();
        }
        for ($i = 1; $i <= 3; $i++){
            if ($request->has('sub'.$i)) {
                $title = $request->input('title'.$i);
                $position = $request->input('position'.$i);
                $desc = $request->input('desc'.$i);
                $update = Team::find($i);
                if ($request->hasFile('image'.$i)) {
                    $this->validate($request, [
                        'image'.$i => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                    $path = "images";
                    $file = $request->file('image'.$i);
                    $name = $file->getClientOriginalName();
                    $file->move($path, $name);
                    $update->image = $name;
                } else {
                    $update->title = $title;
                    $update->position = $position;
                    $update->desc = $desc;

                }
                if (!empty($request)) {
                    $update->user_id = $id;
                }

                $update->save();
            }
        }

        /*if($request->has('sub2')) {
            $title = $request->input('title2');
            $position = $request->input('position2');
            $desc = $request->input('desc2');
            $update = Team::find(2);
            if($request->hasFile('image2')) {
                $this->validate($request, [
                    'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $path = "images";
                $file = $request->file('image2');
                $name = $file->getClientOriginalName();
                $file->move($path, $name);
                $update->image = $name;
            }else{
                $update->title = $title;
                $update->position = $position;
                $update->desc = $desc;
            }
            if(!empty($request)){
                $update->user_id = $id;
            }
            $update->save();
        }

        if($request->has('sub3')) {
            $title = $request->input('title3');
            $position = $request->input('position3');
            $desc = $request->input('desc3');
            $update = Team::find(3);
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
            if(!empty($request)){
                $update->user_id = $id;
            }
            $update->save();
        }*/


        $array1 = Home::all();
        $array2 = Team::all();
        return view('backend.home')->with(['array1'=>$array1,'array2'=>$array2]);


    }


    public function about(){
        $user = User::find(1);  //id = 2 useri tvyalnery
        dump($user->team()->get());   //asum em tox uxarki  id=2 useri grac postery
    }
}
