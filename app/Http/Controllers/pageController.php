<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class pageController extends Controller
{
    public function prelogin()
    {
        if(session('admin')!=null)
        {
            return redirect("admin/dashboard/dashboard");
        }
        else
        {
            return view("signin");
        }
        }
        public function logout()
        {
            session()->forget("admin");
            return redirect("home");
        }
 
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
    public function signinFun()
    {
        return view("signin");
    }
    // public function masterFun()
    // {
    //     return view("admin/dashboard/master");
    // }
    public function dashboardFun()
    {
        return view("admin/dashboard/dashboard");
    }

    public function signinPost(Request $request)
    {
        $email = $request->input('userEmail');
        $password=$request->input('userPassword');
        $admin = admin::where("user_email",$email)->where("user_password",$password)->first();
        
        if($admin)
        {
            session(["admin"=>$admin]);
            return redirect("admin/dashboard/dashboard");
        }
        else
        {
            return redirect()->back()->with('error',"Please Enter A Valid Email Or Password");
        }
    }
}
