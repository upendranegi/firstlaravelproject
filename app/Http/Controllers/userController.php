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

    public function adddata(Request $req){


$userexist=DB::table('users')->where('email','=',$req->email)->count();
if($userexist>=1){
    echo " <script>alert('user alredy exist ')
    window.location.href='./index.php'
    </script>";
}else{
        $user= DB::table('users')->insert([
         

            'name' =>$req->name,
            'email' =>$req->email,
            'age' =>$req->age,
            'city' =>$req->city,
                   
          
        ]);
        
        if($user){
            echo " <script>alert('data add')
            window.location.href='./index.php'
            </script>";
        }else{
            echo  "<script>alert('failed to add data')
            window.location.href='./index.php'
            </script>" ;
        }
    }
    }
}
