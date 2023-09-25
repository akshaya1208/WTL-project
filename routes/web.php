<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfobytesPDFcontroller;
use App\Http\Controllers\ViewinfobytesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\ViewblogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
     return view('home');
})->name('user-home');

Route::get('/about',function(){
    return view('about');
})->name('about');


// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/dashboard',function(){
//     return view('admin.admin-home');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[AdmindashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/activities',[ViewblogController::class,'index'])->name('activities');

Route::controller(ViewinfobytesController::class)->group(function(){
    Route::get('infobytes','index')->name('infobytes');
    Route::get('view-info/{id}','view');

});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::controller(InfobytesPDFcontroller::class)->group(function(){

        Route::get('info','show')->name('info');
        Route::post('info','store')->name('info');
        Route::get('view-infobytes/{id}','view');
        Route::get('/delete-infobytes/{id}','destroy');
        Route::get('/viewedit-infobytes/{id}','viewedit');
        Route::post('update-infobytes','edit')->name('update-infobytes');

    });
    Route::controller(BlogController::class)->group(function(){
        Route::get('admin-blog','index')->name('admin-blog');
        Route::post('admin-blog','store')->name('admin-blog');
        Route::get('view-blog/{id}','view');
        Route::get('/viewedit-blog/{id}','viewedit');
        Route::post('update-blog','edit')->name('update-blog');
        Route::get('/delete-blog/{id}','destroy');
    });



});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
