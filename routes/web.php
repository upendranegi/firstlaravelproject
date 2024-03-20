<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;



Route::get('/admin', function () {
    return view('./admin/index');
});

Route::get('/admin/Dashborad', function () {
    return view('./admin/admin');
}); 
Route::get('/admin/category', function () {
    return view('./admin/category');
}); 

Route::get('/admin/product', [categoryController::class, 'showcategory']);

Route::get('/admin/productpage', [productController::class, 'showproduct']);

Route::post('/addcategory',[categoryController::class, 'addcategory']
)->name('Categorydata');

Route::post('/addproduct',[productController::class, 'addproducts'])->name('productdata');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/Service', function () {
//     return view('serivice');
// });


// Route::get('/Price', function () {
//     return view('price');
// });


// Route::get('/Contact', function () {
//     return view('contact');
// });

// Route::get('/adduser', function () {
//     return view('adduser');
// });



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
