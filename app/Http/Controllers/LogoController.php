<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
class LogoController extends Controller
{
 public function logodetails(){
    $logo = Logo::find(1);
    return view('admin.account.logodetails',compact('logo'));
 }

    public function logochange($id){
        $logo = Logo::find($id);
        return view('admin.account.logochange', compact('logo'));
    }

    public function changelogo(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=200,min_height=30,max_width=300,max_height=50', // Added 'nullable' to the validation rule
        ]);
    
        $logo = Logo::find($id);
        
        // Check if a new logo is uploaded
        if ($request->hasFile('logo')) {
            // Validate and upload the new image
            $filename = $request->file('logo');
            $imagename1 = $filename->getClientOriginalName();
            $filename->move('website-images/logoimage', $imagename1);
            
            // Delete the old image
            $oldImagePath = public_path('website-images/logoimage/' . $logo->logo);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            // Update the logo with the new image path
            $logo->logo = $imagename1;
        }
    
        // Update other fields
        $logo->email = $request->email;
        $logo->phone = $request->phone;
    
        // Save the updated logo
        $logo->save();
    
        return redirect('logodetails')->with('success', 'Logo Updated Successfully');
    }
    
}
