<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\childinfo;
use App\Models\hospital;
use App\Models\VaccineAdd;
use App\Models\vacccineBooking;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;


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
    public function parentprelogin()
    {
        if(session('childinfo')!=null)
        {
            return redirect("parent/dashboard/dashboard");
        }
        else
        {
            return view("signinparent");
        }
        }
        public function parentlogout()
        {
            session()->forget("childinfo");
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
        $vaccineadd = vaccineadd::all();
        $hospital= hospital::all();
        return view("home",compact('hospital','vaccineadd'));
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
        public function dashboardFun()
    {
        return view("admin/dashboard/dashboard");
    }
    public function parentdashboardFun()
    {
        return view("parent/dashboard/dashboard");
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
    public function signinparent()
    {
        return view("signinparent");
    }
    public function signinparentpost(Request $request)
    
        {
            $email = $request->input('parentEmail');
            $password=$request->input('password');
            $childinfo = childinfo::where("parent_email",$email)->where("password",$password)->first();

            if($childinfo)
            {
                session(["childinfo"=>$childinfo]);
                return redirect("parent/dashboard/dashboard");
            }
            else
            {
                return redirect()->back()->with('error',"Sorry, your password was incorrect. Please double-check your password.");
            }
        }
    
    public function signupparent()
    {
        return view("signupparent");
    }
    public function signupParentPost(Request $request)
    
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
    public function signupHospital()
    {
        return view("signuphospital");
    }
    public function signupHospitalPost(Request $request)
    {
        
        $hostpital = new hospital;
        $hostpital->hostpitalName=$request-> hostpital_name ;
        $hostpital->hostpitalEmail=$request->hostpital_email;
        $hostpital->password=$request->Password;
        $hostpital->contactNumber=$request->contact_number;
        $hostpital->address=$request->Address;
        $hostpital->save();
        return redirect()->back()->with("Hospital","Hostpital Registerd SuccessFully");
    
       
    }
    public function hospitalDashboardFun()

    {
        return view("hospital/dashboard/dashboard");
    }
    public function signinHospital()
    {
        return view('signinhospital');
    }
    public function signinHospitalPost(Request $request)
    {
        
        $email = $request->input('hopital_email');
        $password=$request->input('password');
        $hostpital= hospital::where("hostpitalEmail",$email)->where("password",$password)->first();
        
        if($hostpital)
        {
            session(["hospital"=>$hostpital]);  
            return redirect("hospital/dashboard/dashboard");
        }
        else
        {
            return redirect()->back()->with('error',"Sorry, your password was incorrect. Please double-check your password.");
        }
    }
    public function hospitalprelogin()
    {
        if(session('hospital')!=null)
        {
            return redirect("hospital/dashboard/dashboard");
        }
        else
        {
            return view("signinhospital");
        }
        }
        public function hospitallogout()
        {
            session()->forget("hospital");
            return redirect("home");
        }
                public function vaccineaddfun()
                {
                    return view('hospital/dashboard/vaccineadd');
                }
                public function vaccineaddfunpost(Request $request) {
                   // dd($request->all());
                    $validator = Validator::make($request->all(), [
                        'quantity' => 'required|numeric|min:1',
                    ]);
                
                    if ($validator->fails()) {
                        return back()->withErrors($validator);
                    }
                
                    $vaccineadd = new vaccineadd;
                    $vaccineadd->vaccineName=$request->vaccine_name;
                    $vaccineadd->quantity=$request->quantity;
                    $vaccineadd->save();
                
                    return redirect()->back()->with("VaccineAdd","Admin Added SuccessFully");
                }
               
                public function vaccinebookingfunpost(Request $request)
                {
                 
                $vacccineBooking = new vacccineBooking;
                $vacccineBooking->patient_name=$request->Fullname;
                $vacccineBooking->patient_email=$request->mail;
                $vacccineBooking->contactNumber=$request->mobile;
                $vacccineBooking->hospitalName=$request->hospitalName;
                $vacccineBooking->vaccineName=$request->vaccineType;
                $vacccineBooking->date=$request->AppointmentDate;
                $vacccineBooking->time=$request->AppointmentTime;
                $vacccineBooking->save();
                return redirect()->back()->wtih('Success',"Vaccine Book SuccessFully");
                
                }
              
            }                