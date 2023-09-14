<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminMainController;
use App\Http\Controllers\admin\PressController;
use App\Http\Controllers\frontshow\frontMainController;
use App\Http\Controllers\frontshow\FrontviewController;
use App\Http\Controllers\admin\AbtController;
use App\Http\Controllers\admin\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontshow.fronthome');
// });

// for admin
Route::group(['name' => 'admin', 'middleware' => 'adminpages'], function() {
   
    Route::get('/admin-main',[adminMainController::class,'admin']);
    Route::get('/logout',[LoginController::class,'logout']);

    Route::get('/press',[PressController::class,'press']);
    Route::get('/pressform',[PressController::class,'pressform']);
    Route::post('/addevent',[PressController::class,'addEvent']);
    Route::get('/delete/{id}',[PressController::class,'delete']);
    Route::get('/edit/{id}',[PressController::class,'edit']);
    Route::post('/update',[PressController::class,'update']);
    
    Route::get('/abtlist',[AbtController::class,'abtlist']);
    Route::get('/abtform',[AbtController::class,'abtform']);
    Route::post('/addppl',[AbtController::class,'addppl']);
    Route::get('/about-edit/{id}',[AbtController::class,'aboutedit']);
    Route::post('/updateabout',[AbtController::class,'aboutupdate']);
    Route::get('/about-delete/{id}',[AbtController::class,'aboutdelete']);

    Route::get('/photo-list',[adminMainController::class,'photoList']);
    Route::get('/photo-form',[adminMainController::class,'photoform']);
    Route::post('/addphoto',[adminMainController::class,'addphoto']);
    Route::get('/photo-delete/{id}',[adminMainController::class,'photodelete']);
    Route::get('/photo-edit/{id}',[adminMainController::class,'photoedit']);
    Route::post('/updatephoto',[adminMainController::class,'photoupdate']);

    Route::get('/reserve-list',[adminMainController::class,'reserveList']);
    Route::get('/signup-list',[adminMainController::class,'viewerList']);
    Route::get('/job-list',[adminMainController::class,'jobList']);
    Route::get('/contact-list',[adminMainController::class,'contactList']);


});

Route::get('/admin',[adminMainController::class,'index']);
Route::post('/admin-check',[LoginController::class,'check']);


Route::post('/add-reserve',[adminMainController::class,'addReserve']);
Route::post('/sign-up',[adminMainController::class,'signup']);
Route::post('/jobForm',[adminMainController::class,'jobForm']);
Route::post('/contactForm',[adminMainController::class,'contactForm']);




// for user
Route::get('/',[frontMainController::class,'show']);
Route::get('/frontpress',[FrontviewController::class,'frontpress']);
Route::get('/frontabt',[FrontviewController::class,'frontabt']);
Route::get('/frontcom',[FrontviewController::class,'frontcom']);
Route::get('/fronthapp',[FrontviewController::class,'fronthapp']);
Route::get('/fronth&l',[FrontviewController::class,'fronthsl']);
Route::get('/frontpvt',[FrontviewController::class,'frontpvt']);
Route::get('/frontgift',[FrontviewController::class,'frontgift']);
Route::get('/frontjob',[FrontviewController::class,'frontjob']);
Route::get('/frontcontact',[FrontviewController::class,'frontcontact']);
Route::get('/frontgallery',[FrontviewController::class,'frontgallery']);
