<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home',[HomeController::class,'home'])->name('home');
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
Route::get('/post/delete/{id}/{name}',[AdminController::class,'deletePost'])->name('deletePost')->middleware('AdminIsValidCheck');
Route::post('/post/edit',[AdminController::class,'editPostSubmit'])->name('editPost')->middleware('AdminIsValidCheck');
Route::post('upload-image', [AdminController::class, 'changeAdminProPic'])->middleware('AdminIsValidCheck');
Route::get('/jobs/search',[HomeController::class,'index'])->name('search');
Route::get('/search',[HomeController::class,'search']);
// Route::post('/searchRidirect',[HomeController::class,'searchRidirect'])->name('searchRidirect');
Route::get('/queries',[AdminController::class,'queryList'])->name('queryLists')->middleware('AdminIsValidCheck');
Route::get('/contact/delete/{id}/{name}',[AdminController::class,'deleteQuery'])->name('deleteQuery')->middleware('AdminIsValidCheck');
Route::get('/corporates/list',[AdminController::class,'corporateList'])->name('corporateList')->middleware('AdminIsValidCheck');
// Route::get('/post/edit/{id}/{name}',[AdminController::class,'editPost'])->middleware('AdminIsValidCheck');
Route::get('/corporates/delete/{id}/{name}',[AdminController::class,'deleteCorporates'])->name('deleteCorporates')->middleware('AdminIsValidCheck');


//waythin

Route::get('/seeker/dashboard' , [SeekerController::class, 'dashboard'])->name('dashboard');

//sign up
Route::get('/seeker/signup',[SeekerController::class, 'signup'])->name('signup');
Route::post('/seeker/signup',[SeekerController::class, 'signupS'])->name('signup');

//seeker  
Route::get('/seeker/profile',[SeekerController::class, 'profile'])->name('profile')->middleware('SeekerAuth');
Route::get('/seeker/profile/edit/{id}/{username}',[SeekerController::class, 'edit_profile'])->name('seekeredit')->middleware('SeekerAuth');
Route::post('/seeker/profile/edit',[SeekerController::class, 'edit_profileS'])->name('seekeredit')->middleware('SeekerAuth');

// job list
Route::get('/joblist',[PostController::class, 'job_list'])->name('joblist');

//job details
Route::get('/seeker/job_details/{id}/{title}',[PostController::class, 'job_details'])->middleware('SeekerAuth');

//apply
 Route::post('/seeker/job_details/applyjob',[PostController::class, 'apply_job'])->name('applyJob')->middleware('SeekerAuth');
 Route::get('/seeker/job_details/applied_job_list',[PostController::class, 'applied_job_list'])->name('applied_job_list')->middleware('SeekerAuth');

 //Cancel Application
 Route::get('/seeker/cancelapp/{id}/{title}',[PostController::class, 'cancel_application']);