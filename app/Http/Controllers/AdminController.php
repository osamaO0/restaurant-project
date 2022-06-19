<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminController extends Controller
{
    //
    public function users(){
        $data= User::all();
        return view('admin.users', compact('data'));
    }

    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function food(){
        $data=Food::all();
        return view('admin.food', compact('data'));
    }



    public function foodmenu(){
        return view('admin.foodmenu');
    }


    public function uploadfood(Request $req){
        $req->validate([
        'title'=>'required||max:20',
        'price'=>'required',
        'image'=>'required||mimes:jpg,png,jpeg,gif,svg|max:2048',
        'description'=>'required'
        ]);

        $name = $req->image->getClientOriginalName();
        $req->image->move('foodimages',$name);

        $data = new Food;
        $data->image=$name;
        $data->title=$req->title;
        $data->price=$req->price;
        $data->description=$req->description;
        $data->save();
        return redirect()->back();
    }


    public function removefood(){
        $data=Food::all();
        return view('admin.removefood', compact('data'));
    }
    public function remove($id){
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatefood($id){
        $data=Food::find($id);
        return view('admin.updatefood', compact('data'));
    }

    public function update(Request $req ,$id){

        $data=Food::find($id);

        $req->validate([
        'title'=>'required||max:20',
        'price'=>'required',
        'image'=>'required||mimes:jpg,png,jpeg,gif,svg|max:2048',
        'description'=>'required'
        ]);

        $name = $req->image->getClientOriginalName();
        $req->image->move('foodimages',$name);

        $data->image=$name;
        $data->title=$req->title;
        $data->price=$req->price;
        $data->description=$req->description;
        $data->save();
        return redirect()->back();

    }

    public function adminreservation(){
        $data = Reservation::all();
        return view('admin.adminreservation', compact('data'));
    }
}
