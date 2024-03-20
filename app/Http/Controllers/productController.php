<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    

public function showproduct(){
    $productvalue = DB::table('producttable')->get();
    return view('welcome', ['data' => $productvalue]);
}




    public function addproducts(Request $req)
    {  $Product_id="";

        $userexist = DB::table('producttable')->select('id')->orderBy('id', 'Desc')->limit(1)->get();

        foreach ($userexist as $pid => $pvalue) {
            $Product_id = $pvalue->id;
        }

        $user = DB::table('producttable')->insert([

            'Productname' => $req->productname,
            'product_id' => $Product_id,
            'category_id' => $req->categoryid,
            'quntity' => $req->Quntity,
            'product_img1' => $req->file('img1')->store('product_img'),
            'product_img2' => $req->file('img2')->store('product_img'),
            'product_img3' => $req->file('img3')->store('product_img'),
        

            'product_img4' => $req->file('img4')->store('product_img'),
            'Description' => $req->Description,

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
