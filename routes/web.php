<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userquery;
use Illuminate\Support\Facades\Route;

// admin pannel

// get Request Route


Route::group(['prefix' => '/admin'], function () {

    Route::get('/', function () {
        return view('./admin/index');
    });

    Route::get('/logout', function () {
         session()->invalidate();
         return redirect('./admin/');
    })->name('adminlogout');

    Route::get('/Dashborad', function () {

        $check = session()->has('adminuser');

        if ($check) {
            return view('./admin/admin');
        } else {
            return redirect('./admin/');
        }

    });

    Route::get('/userquer', function () {

        $check = session()->has('adminuser');

        if ($check) {
            return view('./admin/userquery');
        } else {
            return redirect('./admin/');
        }

    });


    Route::get('/category', function () {
        $check = session()->has('adminuser');

        if ($check) {
            return view('./admin/category');
        } else {
            return redirect('./admin/');
        }
    });

    Route::get('/product', [categoryController::class, 'showcategory']);

});






Route::get('/', [productController::class, 'showproduct']);

// Route::get('/admin/productpage', );

Route::get('/about', function () {
    return view('about');
});

Route::get('/Service', function () {
    return view('serivice');
});

Route::get('/Price', function () {
    return view('price');
});

Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/Contact', function () {
    return view('contact');
});


// post request Route

Route::post('/query',[userquery::class, 'create']);

Route::post('/adminlogin', [admincontroller::class, 'checkadmin']
)->name('adminlogin');

Route::post('/addcategory', [categoryController::class, 'addcategory']
)->name('Categorydata');

Route::post('/addproduct', [productController::class, 'addproducts'])->name('productdata');








// Route::post('/add',[userController::class, 'adddata']
// )->name('userdata');

// Route::get('/user',[userController::class, 'showdata']
// );

// Route::get('/data/{id}',[userController::class, 'singleuser']
// )->name('single');

// Route::get('/data/{id}',[userController::class, 'singleuser']
// )->name('update');

// Route::get('/about/{id}/{n}', function ($id, $name) {
//     return "<h1> id: ".$id ."</h1>. <h3>".$name."</h3>";
// })->whereNumber('id')->whereAlpha('n');
