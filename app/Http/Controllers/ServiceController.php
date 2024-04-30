<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redis;

class ServiceController extends Controller
{
    public function servicedetails(){
        $services = Service::get();
        return view('admin.services.servicedetails', compact('services'));
    }

    public function addservice(){
        return view('admin.services.addservice');
    }

    public function serviceadd(Request $request){
       $request->validate([
        // 'title' => 'required',
        // 'heading' => 'required|max:50',
        'paragraph' => 'required|max:200',
        'image' => 'required|image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=300,min_height=150,max_width=400,Max_height=200',
        'logoimage' => 'required|image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1200,min_height=350,max_width=1700,Max_height=600',
         'status' => 'required',
       
       ]);
       $service = new Service;
       
      $img_extension = $request->file('image')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_extension;
      $pathimage = $request->file('image')->move(public_path('website-images/serviceimages'), $filename); //image save public folder
    

      $img_extension = $request->file('logoimage')->getClientOriginalExtension();
      $name =  time() . '.' . $img_extension;
      $pathimage = $request->file('logoimage')->move(public_path('website-images/serviceimages'), $name); //image save public folder
     
    //   $service->title = $request->title;
    //   $service->heading = $request->heading;
      $service->image = $filename;// service image
      $service->logoimage = $name;// service logo image
      $service->paragraph = $request->paragraph;
      $service->status = $request->status;
      $service->save();
      return redirect('admin/servicedetails')->with('success','Service Details Submit Successfully');
    }

    public function serviceupdate($id){
        $service = Service::find($id);
        return view('admin.services.serviceupdate',compact('service'));
    }

    public function updateservice(Request $request ,$id){
        $request->validate([
            // 'title' => 'required',
            // 'heading' => 'required|max:50',
            'paragraph' => 'required|max:200',
            'image' => 'required|image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=300,min_height=150,max_width=400,Max_height=200',
            'logoimage' => 'required|image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1200,min_height=350,max_width=1700,Max_height=600',
             'status' => 'required',
           
           ]);

           $service = Service::find($id);
           if($request->hasFile('image')){
            $filename = $request->file('image');
            $imagename = $filename->getClientOriginalName();
            $filename->move('website-images/serviceimages',$imagename);
             // Delete the old image
                    $oldImagePath1 = public_path('website-images/serviceimages/' . $service->image);
                    if (file_exists($oldImagePath1)) {
                        unlink($oldImagePath1);
                    }
            $service->image = $imagename;
           }
            if($request->hasFile('logoimage')){
                $filename = $request->file('logoimage');
                $loginame = $filename->getClientOriginalName();
                $filename->move('website-images/serviceimages',$loginame);
                    // Delete the old image
            $oldImagePath2 = public_path('website-images/serviceimages/' . $service->logoimage);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
                $service->logoimage = $loginame;
             }
            // $service->title = $request->title;
            // $service->heading = $request->heading;
            $service->paragraph = $request->paragraph;
            $service->status = $request->status;
            $service->save();

            return redirect('admin/servicedetails')->with('success','Service Details update Successfully');
         
    }

    public function servicedelete($id){
        $image = Service::where('id', $id)->first();
        if ($image) {
            // Get the path of the images in the public folder
            $imagePath1 = public_path('website-images/serviceimages/' . $image->image);
            $imagePath2 = public_path('website-images/serviceimages/' . $image->logoimage);
        
            // Check if the files exist before attempting deletion
            if (file_exists($imagePath1)) {
                // Delete the first image
                unlink($imagePath1);
            }
            if (file_exists($imagePath2)) {
                // Delete the second image
                unlink($imagePath2);
            }
        
            // Remove the directory if it's empty after deleting the images
            // $imageDirectory = dirname($imagePath1); // Using $imagePath1 for the directory path
            // if (is_dir($imageDirectory) && count(scandir($imageDirectory)) == 2) {
            //     rmdir($imageDirectory); // Delete the directory if it's empty
            // }
        
            // Delete the record from the database
            $image->delete();
            
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
       
    }
}
