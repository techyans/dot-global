<?php

use Illuminate\Support\Facades\Route;

// Website Controllers==============================
use App\Http\Controllers\PageController;
use App\Http\Controllers\Header_Controller;

// Admin Controllers================================
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminAuth;
use App\Http\Controllers\Admin\Media_Controller;

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

Route::get('/', function () {
    return view('welcome');
});
// Pages view controller===========================================
Route::get('/about-us',[PageController::class,'PageAbout']);
Route::get('/contact-us',[PageController::class,'PageContactUs']);
Route::get('/services',[PageController::class,'PageServices']);
Route::get('/blogs',[PageController::class,'PageBlogs']);
Route::get('/work-process',[PageController::class,'PageProcess']);
Route::get('/faqs',[PageController::class,'PageFaqs']);
Route::get('/check',[Header_Controller::class,'Country_Flags']);

// Form Submission Controller=======================================
Route::post('/contact-form-submit',[PageController::class,'Contact_Form_Submit']);
Route::post('/news-letter-subscribe',[PageController::class,'News_Letter_Submit']);

// Admin routes=====================================================
Route::namespace('Admin')->group(function () {
    Route::get('/admin',[AdminPageController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/login/',[AdminPageController::class,'admin_login']);

    Route::get('/admin/add-media/',[AdminPageController::class,'add_media'])->name('admin.addmedia');
    Route::get('/admin/all-media/',[Media_Controller::class,'show_all_media']);
    Route::post('/admin/upload-media/',[Media_Controller::class,'upload_media']);
    Route::post('/admin/view-media-details/',[Media_Controller::class,'view_media_details']);
    Route::post('/admin/update-media-details/',[Media_Controller::class,'update_media_details']);
    Route::post('/admin/delete-media/',[Media_Controller::class,'delete_media']);

    Route::post('/admin/verify-admin-login',[AdminAuth::class,'admin_login']);
    
    // Add more routes here if needed
});