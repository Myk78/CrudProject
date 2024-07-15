<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    public function userdata(){
        $user = DB::table('userdatas')->get();

        return view('userdata',compact('user'));
    }
}
