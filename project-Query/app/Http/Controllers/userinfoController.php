<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userinfoController extends Controller
{
    public function showinfo(){
        $info = DB::table('user_infos')->select('id','name','email','password')->orderBy('name')->Paginate(3);
        return view('userInfor',compact('info'));
    }
    public function singleuser($id){

        $info = DB::table('user_infos')->where('id',$id)->get();
        return view('userdetail',compact('info'));

    }
    public function adduser(Request $req){
        $info = DB::table('user_infos')->insert([
               'name' => $req->name,
                'user_id' =>$req->user_id,
                'email' => $req->email,
                'password' => $req->password,
                'age' => $req->age,
                'address' => $req->address,
                'created_at' => now(),
                'updated_at' => now()


        // Manual;y add the data in database
            // 'name' => 'Arslan',
            // 'user_id' => '2',
            // 'email' => 'arslan@gmail.com',
            // 'password' => 'ash123',
            // 'age' => '24',
            // 'address' => 'xyz',
            // 'created_at' => now(),
            // 'updated_at' => now()

        ]);
        if ($info) {
          return redirect()->route('alluser',compact('info'));            # code...
        }else{
            '<h2> NO Data Found</h2>';
        }

        
        // if($user){
        //     '<h1> user ad'
        // }
    }
    public function updatepage($id){
        $info = DB::table('user_infos')->where('id',$id)->first();
        // return $user;
        return view('update',compact('info','id'));
    }

    public function updateuser(Request $req, $id) {
        $info = DB::table('user_infos')->where('id',$id)
        ->update([
                'name' => $req->name,
                'user_id' =>$req->user_id,
                'email' => $req->email,
                'password' => $req->password,
                'age' => $req->age,
                'address' => $req->address
        ]);
        if ($info) {
            return redirect()->route('alluser');
            //  view('userInfor',compact('info'));
        }
    }

    public function deleteuser($id){
        $user = DB::table('user_infos')->where('id',$id)->delete();
        if ($user) {
            return redirect()->route('alluser');
        }
    }
   
}
