<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Rules\CheckOldPAssword;
class ChangePasswordController extends Controller
{
    public function changePassword(){

        if(Auth::check()){
            $userdata = User::find(Auth::user()->id);
            return view('admin.account.changePassword' ,compact('userdata'));
            }
            return redirect('account/login')->with('error','Please Login First');
      //  return view('admin.account.changePassword');
    }


    public function changePasswordSave(Request $request){
    // return $request;
         $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|max:8|same:confirm_password',
            'confirm_password' => 'required',
         ]);
       //  return $request->auth()->user()->password;
         if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error',"Current Password is invalid");
         }

         //return $request;
         if(strcmp($request->get('old_password'), $request->get('new_password')) == 0)
            {
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }
         User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
       //  $user->save();
          return redirect('dashboard')->with('success',"Password Change Successfully");
    }
}
