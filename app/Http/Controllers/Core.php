<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Home;
use App\Team;
use App\About;
use App\Promo;
use App\Contact;
use App\Social;
use App\User;
class Core extends Controller
{
    public function index(){
        $array1 = Home::all();
        $array2 = Team::all();
        return view('frontend.index')->with(['array1'=>$array1,'array2'=>$array2]);
    }
    public function about(){
        $array1 = About::all();
        $array2 = Promo::all();
        return view('frontend.about')->with(['array1'=>$array1,'array2'=>$array2]);
    }
    public function services(){
        //$results = Service::all();    //e_error    array_splice() expects parameter 1 to be array, object given
        $results = DB::select('select * from services');
        return view('frontend.services')->with(['results'=>$results]);
    }

    public function contacts(Request $request){
        $name = $request->input('name');
        $cname = $request->input('cname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $mssg = $request->input('message');
        /*if($request->has('Nname')) && $request->has('Email')) && $request->has('Phone'))){
            $to      = 'info@teleyan.com';
            $subject = 'Teleyan Web Site';
            $message = 'Name: '.$name. "\r\n" .
                'Company Name: '.$cname. "\r\n" .
                'E-Mail: '.$email. "\r\n" .
                'Phone: '.$phone. "\r\n" .
                'Message: '.$mssg. "\r\n" ;
            $headers = 'From: '.$email . "\r\n";
            mail($to, $subject, $message, $headers);
            return false;
        }*/
        $data = Contact::all();
        return view('frontend.contacts')->with(['data'=>$data]);
    }

    public function footer(){
        $data = Social::all();

        return view('frontend.layouts.templet');
    }
}
