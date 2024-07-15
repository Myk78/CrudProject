<?php

namespace Database\Seeders;

use App\Models\userInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class userInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        userInfo::truncate();
       $detail = File::get(path:'database/json/userInfos.json');
        $userdetail = collect(json_decode($detail));
        $userdetail->each(function($personal){
            userInfo::create([
                'name' => $personal->name,
                'user_id' =>$personal->user_id,
                'email' => $personal->email,
                'password' => $personal->password,
                'age' => $personal->age,
                'address'=>$personal->address

            ]);
            });
    }
}
