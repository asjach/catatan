<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//episode 8
Route::get('/about-us', function () {
    return view('about');
});

Route::view('contact-us', 'contact');




// //EPISODE 5:
// Route::get("/", function () {
//     return "hello World";
// });

// Route::get("about", function () {
//     return "About Us";
// });


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
// Route::prefix("details")->group(function () {
//     Route::get("students", function () {
//         return "this is student";
//     })->name('student-details');


//     Route::get("teachers", function () {
//         return "this is teacher";
//     })->name('teachers-details');
// });


// // Episode: 7
// // parametered route
// Route::get('student/{id}', function ($id) {
//     return 'student number '.$id;
// });

// // fallback
// Route::fallback(function () {
//     return 'this page is not found, please try again';
// });