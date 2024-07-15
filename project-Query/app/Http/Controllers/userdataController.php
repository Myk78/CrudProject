<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userdataController extends Controller
{
    public function userdata(){
        $user = DB::table('userdatas')->get();

        return view('welcome',compact('user'));
        
        // foreach ($user as $id=> $us) {
        //      echo $us->name .'<br>';
        // }
        // return $user;
        
    }
}
