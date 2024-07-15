<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userinfoController extends Controller
{
    public function showinfo(){
        $info = DB::table('user_infos')->select('name','email','password')->get();
        return view('userInfor',compact('info'));
    }
    public function singleuser($id){

        $info = DB::table('user_infos')->where('id',$id)->get();
        return view('userdetail',compact('info'));

    }
   
}
