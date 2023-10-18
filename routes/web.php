<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FileUpload;

use App\Http\Controllers\Auth\AuthController;

// Route::controller(AuthController::class)->group (function(){

   
//     // Route::get('/dashboard', 'showDashboard')->name('dashboard');


//     // without group
//     // Route::get('/user_info', [PageController::class, 'showUsers'])->name('users');

// });




// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::get('/dashboard', 'index')->name('login');
//     Route::post('/dashboard', 'login')->name('login');

// });



Route::get('/admin/login', function () {
        return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::get('/admin/test', function () {
    return view('admin.test');
});














Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');


Route::controller(PageController::class)->group (function(){

    Route::get('/', 'showHome')->name('home');
    Route::get('/category', 'showCategory')->name('category');
    Route::get('/contactus', 'showContactus')->name('contactus');

    // without group
    // Route::get('/user_info', [PageController::class, 'showUsers'])->name('users');

});


Route::controller(ContactsController::class)->group (function(){

    Route::get('/user_info', 'showContacts')->name('contactinfo');

    // by id number show info route
    Route::get('/user_info/{id}', 'singleContacts')->name('view.contactinfo');

    // update user data by id number route
    Route::put('/user_info/update/{id}', 'updateContacts')->name('update.contactinfo');

    //first find user id code for updating 
    Route::get('/user_info/updatepage/{id}', 'updatePage')->name('update.page');

    // delete user data by id number route
    Route::get('/user_info/delete/{id}', 'deleteContacts')->name('delete.contactinfo');

    Route::post('/adduser','addContacts')->name('addContacts');
    Route::view('newuser', '/adduser');



    Route::get('user','index')->name('user.index');
    Route::post('user','userStore')->name('user.store');


});



Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');



Route::get('/test', TestingController::class);



Route::fallback(function(){
    return view('notfound');
})->name('404_error_page');














