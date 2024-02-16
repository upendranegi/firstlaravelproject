<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

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


Route::get('/user',[userController::class, 'showdata']
);


Route::get('/data/{id}',[userController::class, 'singleuser']
)->name('singleuser');

// Route::get('/about/{id}/{n}', function ($id, $name) {
//     return "<h1> id: ".$id ."</h1>. <h3>".$name."</h3>";
// })->whereNumber('id')->whereAlpha('n');
