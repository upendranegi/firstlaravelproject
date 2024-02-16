<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function showdata(){
        $user= DB::table('users')->get();
        return view('userdata',['data' =>$user]);
    }

    public function singleuser(string $id){
        $user= DB::table('users')->where('id','=',$id)->get();
        return view('data',['data' =>$user]);
    }


    
    public function updatedata(string $id){
        $user= DB::table('users')->where('id','=',$id)->get();
        return view('data',['data' =>$user]);
    }
}
