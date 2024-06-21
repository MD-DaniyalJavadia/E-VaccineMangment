<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function homePageFun()
    {
        return view('home');
    }
    public function aboutpageFun()
    {
        return view('about');
    }
    public function servicespageFun()
    {
        return view("services");
    }
    public function contactpageFun()
    {
        return view("contact");
    }
    public function featurespageFun()
    {
        return view("features");
    }
    public function teampageFun()
    {
        return view("team");
    }
    public function testimonialpageFun()
    {
        return view('testimonial');
    }
    public function appoinmentpageFun()
    {
        return view('appoinment');
    }
    public function notfoundpageFun()
    {
        return view('notfound');
    }
}
