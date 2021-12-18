<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SeekerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/admin/signup',[RegistrationController::class,'validateAdminRegistration']);   //For Admin Signup
Route::post('/login',[LoginAPIController::class,'login']); //For login
Route::post('/logout',[LoginAPIController::class,'logout']); //For Logout
Route::get('/admin/dash',[AdminController::class,'dashboardAPI'])->middleware('APILoginAuth'); //Dashboard infos
Route::get('/admin/edit/{id}',[AdminController::class,'editAdminInfoAPI'])->middleware('APILoginAuth');// Admin Profile Information
Route::post('/admin/edit',[AdminController::class,'adminInfoUpdate'])->middleware('APILoginAuth');// Admin Profile Update
Route::get('/posts/list',[AdminController::class,'showAllPostAPI'])->middleware('APILoginAuth'); // Showing All Post Data
Route::get('/post/{id}',[AdminController::class,'editPostAPI'])->middleware('APILoginAuth'); // For getting individual Post Data
Route::post('/post/update',[AdminController::class,'editPostSubmit'])->middleware('APILoginAuth'); //For Updating Posts
Route::get('/post/delete/{id}',[AdminController::class,'deletePost']); //For Deleting Posts
Route::get('/seeker/list',[AdminController::class,'seekersList'])->middleware('APILoginAuth'); //For Getting All Seeker Users
Route::get('/femp/list',[AdminController::class,'fempsList'])->middleware('APILoginAuth'); //For Getting All Freelance Employers
Route::get('/cemp/list',[AdminController::class,'corporateList'])->middleware('APILoginAuth'); //For Getting All Freelance Employers
Route::get('/home/counts',[AdminController::class,'countsAPI']); //For getting total user or job counts