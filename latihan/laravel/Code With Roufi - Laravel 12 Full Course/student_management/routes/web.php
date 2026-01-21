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

//EPISODE 6:
// Route::get("details/student", function(){
//     return "this is student";
// });

// Route::get("details/teachers", function(){
//     return "this is teacher";
// });

// dua route di atas bisa digabungkan menjadi:
// name digunakan di laravel, tidak di address bar
// routenya akan menjadi domain/details/students
Route::prefix("details")->group(function () {
    Route::get("students", function () {
        return "this is student";
    })->name('student-details');

    Route::get("teachers", function () {
        return "this is teacher";
    })->name('teachers-details');
});