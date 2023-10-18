<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::prefix('page')->group(function(){
//     Route::get('/categories', function () {
//         return view('category');
//     });

//     Route::get('/contact', function () {
//         return view('contactus');
//     });
// });


// Route::fallback(function(){
//     return view('notfound');
// })->name('404_error_page');



Route::get('/', [PageController::class, 'showHome'])->name('home');
Route::get('/category', [PageController::class, 'showUser'])->name('category');
Route::fallback('notfound', [PageController::class, 'showNotFound'])->name('404_error_page');















