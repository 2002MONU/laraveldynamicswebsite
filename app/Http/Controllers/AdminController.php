<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Enquiry;
class AdminController extends Controller
{
    // show Login admin
    public function login() {
        return view('admin.account.login');
    }

  // Admin Login
    public function adminlogin(Request $request){
         $request->validate([
            'email' => 'required',
            'password' => 'required',
         ]);
  // request admin to login
         if(Auth::attempt(['email' =>$request->email, 'password' =>$request->password])){
            return redirect('dashboard')->with('success','Admin Login Successfully');
         }else{
            return redirect('account/login')->with('error','Opps! Email Password Invalid');
         }
    }
  // Admin Dashboard Show 
    public function dashboard(){
      $enquiry = Enquiry::distinct()->count('id');
      $contact = Contactform::distinct()->count('id');
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();
        return view('admin.dashboard',compact('user', 'enquiry', 'contact'))->with('Please Login First');
    }

    // Admin Logout
    public function logout(){
        Auth::logout();
        return redirect('account/login')->with('success','Logout Successfully');
    }

    public function contactDetails(){
      $contactdetail = Contactform::orderBy('id','desc')->paginate(2);
      return view('admin.contactDetails', compact('contactdetail'));
    }

}
