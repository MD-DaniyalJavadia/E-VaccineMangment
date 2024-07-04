<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\childinfo;
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
            return view("signinadmin");
        }
        }
        public function logout()
        {
            session()->forget("admin");
            return redirect("home");
        }
        public function signupfunction()
        {
            return view("signupadmin");
        }
        public function signuppostfunction(Request $request)
        {
     
        $admin = new admin;
        $admin->user_email=$request->userEmail;
        $admin->user_password=$request->userPassword;
        $admin->save();
        return redirect()->back()->with("AdminSuccess","Admin Added SuccessFully");
    
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
        return view("signinadmin");
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
            return redirect()->back()->with('error',"Sorry, your password was incorrect. Please double-check your password.");
        }
    }
    public function signin_parent()
    {
        return view("signinparent");
    }
    public function signinparentpost(Request $request)
    {
    }
    public function signupparent()
    {
        return view("signupparent");
    }
    public function signuppost(Request $request)
    {
        $childinfo = new childinfo;
        $childinfo->first_name=$request->firstName;
        $childinfo->last_name=$request->lastName;
        $childinfo->parent_email=$request->parentEmail;
        $childinfo->password=$request->password;
        $childinfo->phno_number=$request->phnoNumber;
        $childinfo->Address=$request->address;
        $childinfo->save();
        return redirect()->back()->with("success","Usper Added SuccessFully");
    }
    public function forgotpassword()
    {
        return view("forget");
    }
    public function signuphostpial()
    {
        return view("signuphospital");
    }
}
