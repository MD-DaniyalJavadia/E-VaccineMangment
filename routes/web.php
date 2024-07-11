

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('master', function () {
    return view('master');
});

Route::get("contact",[PageController::class,"contactPageFun"])->name('contact.page');
Route::get("services",[PageController::class,"servicesPageFun"])->name('services.page');
Route::get("home",[PageController::class,"homePageFun"])->name('home.page');
Route::get("about",[PageController::class,"aboutPageFun"])->name('about.page');
Route::get("features",[PageController::class,"featuresPageFun"])->name('features.page');
Route::get("team",[PageController::class,"teamPageFun"])->name("team.page");
Route::get("testimonial",[PageController::class,"testimonialPageFun"])->name("testimonial.page");
Route::get("appoinment",[PageController::class,"appoinmentPageFun"])->name("appoinment.page");
Route::get("404notfound",[PageController::class,"notfoundPageFun"])->name('404notfound.page');

Route::get("signin-admin",[PageController::class,"signinFun"])->name('signINAdmin');
Route::post("signinpost",[PageController::class,"signinPost"])->name("siginPostAdmin");

Route::get("login",[PageController::class,"prelogin"]);
Route::get("admin-logout",[PageController::class,"logout"])->name("logout");

Route::get("admin/dashboard/dashboard",[PageController::class,"dashboardFun"])->name("dashboard");
Route::get("admin/dashboard/master",[PageController::class,"masterFun"])->name("master");

Route::get("signup-admin",[PageController::class,"signupFunction"])->name('signup');
Route::post("signuppostadmin",[PageController::class,"signupPostFunction"])->name('signup.post');

Route::get("signin-parent",[PageController::class,"signinParent"])->name('signinparent');
Route::post("signin-post",[PageController::class,"signinParentPost"])->name('signinparent.post');

Route::get("signup-parent",[PageController::class,"signupParent"])->name('signupparent');
Route::post("signupparentpost",[PageController::class,"signupParentPost"])->name('signupparentpost');

Route::get("forgot",[PageController::class,"forgotPassword"])->name('forgot.page');

Route::get("signup-hospital",[PageController::class,"signupHospital"])->name('signup-hospital');
Route::post("signup-hospital-post",[PageController::class,"signupHospitalPost"])->name('hostpitalpost');
;
Route::get("parent/dashboard/dashboard",[PageController::class,"parentDashboardFun"])->name("parentdashboard");

Route::get("login",[PageController::class,"parentPrelogin"]);
Route::get("parent-logout",[PageController::class,"parentlogout"])->name("parentlogout");

Route::get("hospital/dashboard/dashboard",[PageController::class,"hospitalDashboardFun"]);
Route::get("hospital/dashboard/hostpitaladd",[PageController::class,"hospitalAdd"]);

Route::get("signin-hostpital",[PageController::class,"signinHospital"])->name('signinHospital');
Route::post("signin-post-hospital",[PageController::class,"signinHospitalPost"])->name('signinhostpital.post');


Route::get("login",[PageController::class,"hospitalprelogin"]);
Route::get("logout",[PageController::class,"hospitallogout"])->name("hospital-logout");
Route::get("hospital/dashboard/vaccineadd",[pageController::class,"vaccineaddfun"])->name('vaccineadd');
Route::post("hospital/dashboard/vaccineadd-post",[pageController::class,"vaccineaddfunpost"])->name('vaccineadd.post');