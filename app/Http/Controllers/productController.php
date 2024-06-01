<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //

    public function showproduct()
    {
        $productvalue = DB::table('producttable')->select()->get();
        return view('welcome', ['data' => $productvalue]);
    }

    public function addproducts(Request $req)
    {
        $Product_id = "";
        function imagename($imagename)
        {

            $pic1 = $imagename;
            return $pic1path = $pic1->store('public/upload_img');

        }

        $userexist = DB::table('producttable')->select('id')->orderBy('id', 'Desc')->limit(1)->get();

        foreach ($userexist as $pid => $pvalue) {
            $Product_id = $pvalue->id;
        }

        if ($req->hasFile('img1')) {
            $pic1 = imagename($req->file(('img1')));
        }

        if ($req->hasFile('img2')) {
            $pic2 = imagename($req->file(('img2')));
        }

        if ($req->hasFile('img3')) {
            $pic3 = imagename($req->file(('img3')));
        }

        if ($req->hasFile('img4')) {
            $pic4 = imagename($req->file(('img4')));
        }

        $user = DB::table('producttable')->insert([

            'Productname' => $req->productname,
            'product_id' => $Product_id,
            'category_id' => $req->categoryid,
            'quntity' => $req->Quntity,

            'product_img1' => $pic1,
            'product_img2' => $pic2,
            'product_img3' => $pic3,

            'product_img4' => $pic4,
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
