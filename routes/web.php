<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/help', function () {
    return response("<h1>Hello World</h1>");
});


// //any id 
// Route::get('/help/{id}', function ($id) {
//     return response("Posts ". $id);
// });




//
Route::get('/help/{id}', function ($id) {
    dd($id);

    return response("Posts ". $id);
})->where("id", '[0-9]+');