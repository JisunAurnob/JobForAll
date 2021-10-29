<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/admin/registration',[RegistrationController::class,'adminRegistration'])->name('adminSignup');
Route::post('/admin/registration',[RegistrationController::class,'validateAdminRegistration'])->name('adminSignup');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'validateContact'])->name('contact');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/admin/dash',[AdminController::class,'dashboard'])->name('dashboardAdmin')->middleware('AdminIsValidCheck');
Route::get('/admin/edit',[AdminController::class,'editAdminInfo'])->name('editAdminInfo')->middleware('AdminIsValidCheck');
Route::post('/admin/edit',[AdminController::class,'adminInfoUpdate'])->name('adminInfoUpdate')->middleware('AdminIsValidCheck');
Route::get('/seeker/list',[AdminController::class,'seekersList'])->name('seekersList')->middleware('AdminIsValidCheck');
Route::get('/seeker/edit/{id}/{name}',[AdminController::class,'editSeeker'])->middleware('AdminIsValidCheck');
Route::post('/seeker/edit',[AdminController::class,'editSeekerSubmit'])->name('editSeeker')->middleware('AdminIsValidCheck');
Route::get('/seeker/delete/{id}/{name}',[AdminController::class,'deleteSeeker'])->name('deleteSeeker')->middleware('AdminIsValidCheck');
Route::get('/admin/profile',[AdminController::class,'adminProfile'])->name('adminProfile')->middleware('AdminIsValidCheck');
Route::get('/posts/list',[AdminController::class,'showAllPost'])->name('showAllPost')->middleware('AdminIsValidCheck');
Route::get('/post/edit/{id}/{name}',[AdminController::class,'editPost'])->middleware('AdminIsValidCheck');
Route::post('/post/edit',[AdminController::class,'editPostSubmit'])->name('editPost')->middleware('AdminIsValidCheck');