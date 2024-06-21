<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\pageController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('master', function () {
    return view('master');
});
Route::get("contact",[pageController::class,"contactpageFun"])->name('contact.page');
Route::get("services",[pageController::class,"servicespageFun"])->name('services.page');
Route::get("home",[pageController::class,"homePageFun"])->name('home.page');
Route::get("about",[pageController::class,"aboutpageFun"])->name('about.page');
Route::get("features",[pageController::class,"featurespageFun"])->name('features.page');
Route::get("team",[pageController::class,"teampageFun"])->name("team.page");
Route::get("testimonial",[pageController::class,"testimonialpageFun"])->name("testimonial.page");
Route::get("appoinment",[pageController::class,"appoinmentpageFun"])->name("appoinment.page");
Route::get("404notfound",[pageController::class,"notfoundpageFun"])->name('404notfound.page');