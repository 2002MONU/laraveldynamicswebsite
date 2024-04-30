<?php

namespace App\Http\Controllers;

use App\Models\ServiceFeature;
use App\Models\ServiceNrtureBanner;
use Illuminate\Http\Request;

class NrtureController extends Controller
{
    public function nrturebanner(){
        $nrture = ServiceNrtureBanner::find('1');
        return view('servicesection.nrturebanner', compact('nrture'));
    }

    public function nrturebannerForm($id){
        $nrturebanner = ServiceNrtureBanner::find($id);
        return view('servicesection.editnrturebanner', compact('nrturebanner'));
    }   

    public function nrturebannerpost(Request $request,$id){
       $request->validate([
        'heading' => 'required|max:20',
        'image' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1600,min_height=1000,max_width=2000,max_height=1300',
       ]);
        
       $nrturebanner = ServiceNrtureBanner::find($id);
       if($request->hasFile('image')){
        $filename = $request->file('image');
        $imagename1 = $filename->getClientOriginalName();
        $filename->move('website-images/servicepage',$imagename1);

         // Delete the old image
         $oldImagePath = public_path('website-images/servicepage/' . $nrturebanner->image);
         if (file_exists($oldImagePath)) {
             unlink($oldImagePath);
         }
        $nrturebanner->image = $imagename1;
       }


       $nrturebanner->heading = $request->heading;
       $nrturebanner->save();
       return redirect('nrturebanner')->with('success',"Nrture Banner Successfully");
    }

    public function servicefeatures(){
        $servicefeature = ServiceFeature::get();
        return view('servicesection.servicefeatures', compact('servicefeature'));
    }

    public function addfeatures(){
        return view('servicesection.addservicefeatures');
    }

    public function addservicefeatures(Request $request){
        $request->validate([
            'title' => 'required|max:20',
            'heading' => 'required|max:40',
            'paragraph' => 'required|max:300',
            'point1' => 'max:80',
            'point2' => 'max:80',
            'point3' => 'max:80',
            'point4' => 'max:80',
            'image' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=450,min_height=450,max_width=600,max_height=600',
        ]);

        $servicefeature = new ServiceFeature;
        
      $img_extension = $request->file('image')->getClientOriginalExtension();
      $name =  time() . '.' . $img_extension;
      $pathimage = $request->file('image')->move(public_path('website-images/servicepage'), $name); //image save public folder\


      $servicefeature->title = $request->title;
      $servicefeature->heading = $request->heading;
      $servicefeature->paragraph = $request->paragraph;
      $servicefeature->point1 = $request->point1;
      $servicefeature->point2 = $request->point2;
      $servicefeature->point3 = $request->point3; 
      $servicefeature->point4 = $request->point4;
      $servicefeature->image = $name;
      $servicefeature->status = $request->status;
      $servicefeature->link = $request->link;
      $servicefeature->save();
      return  redirect('servicefeatures')->with('success','Service Features Add Successfully');
    }

   public function updateservice($id){
       $featureservice = ServiceFeature::find($id);
        return view('servicesection.updatefeature' ,compact('featureservice'));
   }


   public function updatefeature(Request $request, $id)
{
    $request->validate([
        'title' => 'required|max:20',
        'heading' => 'required|max:40',
        'paragraph' => 'required|max:300',
        'point1' => 'max:80',
        'point2' => 'max:80',
        'point3' => 'max:80',
        'point4' => 'max:80',
        'image' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=450,min_height=450,max_width=600,max_height=600', // Corrected the capitalization of Max_height
    ]);

    $servicefeature = ServiceFeature::find($id);

    // Check if a new image is uploaded
    if ($request->hasFile('image')) {
        // Validate and upload the new image
        $filename = $request->file('image');
        $imagename1 = $filename->getClientOriginalName();
        $filename->move('website-images/servicepage', $imagename1);
        
        // Delete the old image
        $oldImagePath = public_path('website-images/servicepage/' . $servicefeature->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        // Update the service feature with the new image path
        $servicefeature->image = $imagename1;
    }

    // Update other fields
    $servicefeature->title = $request->title;
    $servicefeature->heading = $request->heading;
    $servicefeature->paragraph = $request->paragraph;
    $servicefeature->point1 = $request->point1;
    $servicefeature->point2 = $request->point2;
    $servicefeature->point3 = $request->point3;
    $servicefeature->point4 = $request->point4;
    $servicefeature->status = $request->status;
    $servicefeature->link = $request->link;

    // Save the updated service feature
    $servicefeature->save();

    return redirect('servicefeatures')->with('success', 'Service Features Updated Successfully');
}

   
}
