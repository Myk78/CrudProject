<?php

namespace Database\Seeders;

use App\Models\userdata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class userdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // userdata::create
        // File::allFiles('database/json/userdata.json')
        $json =File::get(path:'database/json/userdata.json');
        $userdata = collect(json_decode($json));
        $userdata->each(function($user){
            userdata::create([
             'name' => $user->name,
            'email' => $user->email,
            'password'=> $user->password 
            ]);
            
        });
    }
}
