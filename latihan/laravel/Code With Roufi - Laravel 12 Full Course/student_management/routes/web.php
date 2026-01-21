<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//EPISODE 5:
Route::get("/", function () {
    return "hello World";    
});

Route::get("about", function () {
    return "About Us";    
});
