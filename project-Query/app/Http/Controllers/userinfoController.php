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
    public function adduser(){
        $info = DB::table('user_infos')->insert([
            'name' => 'Arslan',
            'user_id' => '2',
            'email' => 'arslan@gmail.com',
            'password' => 'ash123',
            'age' => '24',
            'address' => 'xyz',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        return view('userInfor',compact('info'));
        // if($user){
        //     '<h1> user ad'
        // }
    }

    public function updateuser(){
        $info = DB::table('user_infos')->where('id',2)
        ->update([
            'name' => 'Mohammad Yaseen',
            'age' => 23
        ]);
        if ($info) {
            return view('userInfor',compact('info'));
        }
    }

    public function deleteuser($id){
        $user = DB::table('user_infos')->where('id',$id)->delete();
        if ($user) {
            return redirect()->route('alluser');
        }
    }
   
}
