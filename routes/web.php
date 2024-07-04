<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\pageController;
// Route::get('master', function () {
//     return view('master');
// });

Route::get("contact",[pageController::class,"contactpageFun"])->name('contact.page');
Route::get("services",[pageController::class,"servicespageFun"])->name('services.page');
Route::get("home",[pageController::class,"homePageFun"])->name('home.page');
Route::get("about",[pageController::class,"aboutpageFun"])->name('about.page');
Route::get("features",[pageController::class,"featurespageFun"])->name('features.page');
Route::get("team",[pageController::class,"teampageFun"])->name("team.page");
Route::get("testimonial",[pageController::class,"testimonialpageFun"])->name("testimonial.page");
Route::get("appoinment",[pageController::class,"appoinmentpageFun"])->name("appoinment.page");
Route::get("404notfound",[pageController::class,"notfoundpageFun"])->name('404notfound.page');

Route::get("SignIn-admin",[pageController::class,"signinFun"])->name('signINAdmin');
Route::post("signinpost",[pageController::class,"signinPost"])->name("siginPostAdmin");
Route::get("login",[pageController::class,"prelogin"]);

Route::get("logout",[pageController::class,"logout"])->name("logout");

Route::get("admin/dashboard/dashboard",[pageController::class,"dashboardFun"])->name("dashboard");
Route::get("admin/dashboard/master",[pageController::class,"masterFun"])->name("master");

Route::get("signup-admin",[pageController::class,"signupfunction"])->name('signup');
Route::post("signuppost",[pageController::class,"signuppostfunction"])->name('signup.post');

Route::get("signin-parent",[pageController::class,"signin_parent"])->name('signinparent');
Route::post("signin-post",[pageController::class,"signinparentpost"])->name('signinparent.post');

Route::get("signup-parent",[pageController::class,"signupparent"])->name('signup-parent');
Route::post("signup-parentpost",[pageController::class,"signuppost"])->name('signupparent.post');

Route::get("forgot",[pageController::class,"forgotpassword"])->name('forgot.page');