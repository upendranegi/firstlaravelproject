<?php

namespace App\Http\Controllers;

use function Laravel\Prompts\select;
use function Laravel\Prompts\table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function showcategory()
    {
        $catdata = DB::table('category')->get();

        
            $check=    session()->has('adminuser');
               
               if($check){
                return view('./admin/product', ['catdata' => $catdata]);
          }else{
            return  redirect('./admin/');
          }
          
          

       
    }

    public function addcategory(Request $req)
    {

        $cateid = DB::table('category')->select('id')->orderBy('id', 'DESC')->limit(1)->get();

        $userexist = DB::table('category')->where('category_name', '=', $req->name)->count();
        if ($userexist >= 1) {
            echo " <script>alert('user alredy exist ')
    window.location.href='./category.php'
    </script>";
        } else {
            if(count($cateid)==0){
                $idata=0;  
            }else{
                foreach ($cateid as $data => $catdata) {
                    $idata = $catdata->id;
                }
            }
           

            $user = DB::table('category')->insert([

                'category_name' => $req->name,
                'category_id' => 'Catid' . $idata,

            ]);

            if ($user) {
                echo " <script>alert('data add')
            window.location.href='./admin/Dashborad'
            </script>";
            } else {
                echo "<script>alert('failed to add data')
            window.location.href='./admin/admin.php'
            </script>";
            }
        }
    }

}
