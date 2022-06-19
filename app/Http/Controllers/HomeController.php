<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Reservation;

class HomeController extends Controller
{
    //
    public function index(){
        $data=Food::all();
        return view('home', compact('data'));
    }


    public function redirects(){

        
        $usertybe= Auth::user()->usertybe;

        if ($usertybe=='1') {
            return view('admin.adminhome');
        }
        else{
            $data=Food::all();
            return view('home', compact('data'));
        }
    }

    public function makereservation(Request $req){
        $req->validate([
        'name'=>'required||max:50',
        'phone'=>'required',
        'time'=>'required',
        'guestnumber'=>'required',
        'date'=>'required'
        ]);
        
        $data = new Reservation;

        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->guestnumber=$req->guestnumber;
        $data->date=$req->date;
        $data->time=$req->time;
        $data->message=$req->message;
        $data->save();
        return redirect()->back();
    }
}
