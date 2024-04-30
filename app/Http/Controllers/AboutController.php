<?php

namespace App\Http\Controllers;

use App\Models\Aboutmission;
use App\Models\Aboutpage;
use App\Models\AboutSection;
use App\Models\AddExpert;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function abouthomedetails(){
        $aboutpage = Aboutpage::find(1);
        return view('about.abouthomedetails',compact('aboutpage'));
    }

    public function editabout($id){
        $aboutpage = Aboutpage::find($id);
        return view('about.aboutedit',compact('aboutpage'));
    }

    public function aboutabout(Request $request,$id){
        $request->validate([
            'heading' => 'required|max:20',
            'image' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=500,max_width=1000,max_height=700',
        ]);

        $aboutpage = Aboutpage::find($id);
        if($request->hasFile('image')){
            $filename = $request->file('image');
            $imagename = $filename->getClientOriginalName();
            $filename->move('website-images/aboutpage',$imagename);
            $aboutpage->image = $imagename;
           }
           $aboutpage->heading = $request->heading;
           $aboutpage->save();
          return redirect('admin/abouthomedetails')->with('success','About Details Update Successfully');
    }

    public function about(){
         $about = AboutSection::find(1);
        return view('about.aboutdetail',compact('about'));
    }

    public function editaboutpage(){
        $about = AboutSection::find(1);
        return view('about.abouteditpage',compact('about'))->with('success','Edit Details Update Successfullly');
    }

    public function aboutpagedit(Request $request,$id){
        $request->validate([
            'title' => 'required|max:50',
            'heading' => 'required|max:100',
            'paragraph1' => 'required|max:400',
            'paragraph2' => 'required|max:600',
            'image' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1200,min_height=1000,max_width=1900,max_height=1300',
            
        ]);

        $about = AboutSection::find($id);
        if($request->hasFile('image')){
            $filename = $request->file('image');
            $imagename = $filename->getClientOriginalName();
            $filename->move('website-images/aboutpage',$imagename);
            $about->image = $imagename;
           }
         $about->title = $request->title;
         $about->heading = $request->heading;
         $about->paragraph1 = $request->paragraph1;
         $about->paragraph2 = $request->paragraph2;
         $about->save();

         return redirect('admin/aboutdetail')->with('success','About Page Edit Successfully');
    }


    public function aboutmission(){
        $aboutmission = Aboutmission::find(1);
      return view('about.aboutmissiondetail',compact('aboutmission'));

    }

    public function mission($id){
       $aboutmission = Aboutmission::find($id);
       return view('about.aboutmissionedit',compact('aboutmission'));
    }

    public function missionabout(Request $request,$id){
        $request->validate([
            'title' => 'required|max:50',
            'heading' => 'required|max:100',
            'paragraph1' => 'required|max:400',
            'paragraph2' => 'required|max:600',
            'image' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1200,min_height=1000,max_width=1900,max_height=1300',
            
        ]);

        $aboutmission = Aboutmission::find($id);
        if($request->hasFile('image')){
            $filename = $request->file('image');
            $imagename = $filename->getClientOriginalName();
            $filename->move('website-images/aboutpage',$imagename);
             // Delete the old image
                $oldImagePath = public_path('website-images/aboutpage/' . $aboutmission->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            $aboutmission->image = $imagename;
           }
         $aboutmission->title = $request->title;
         $aboutmission->heading = $request->heading;
         $aboutmission->paragraph1 = $request->paragraph1;
         $aboutmission->paragraph2 = $request->paragraph2;
         $aboutmission->save();

         return redirect('admin/aboutmission')->with('success','About Page Edit Successfully');
    }

  public function expertdeatil(){
    $experts = AddExpert::get();
    return view('about.expertdetail',compact('experts'));
  }

    public function expert(){
        return view('about.addexpertteam');
    }

    public function expertadd(Request $request){
           $request->validate([
            'name' => 'required|max:30',
            'designation' => 'required|max:50',
            'paragraph' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024|dimensions:min_width=300,min_height=3400,max_width=400,max_height=500',
            'status' => 'required',
           ]);
            $expert = new AddExpert;
              
      $img_extension = $request->file('image')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_extension;
      $pathimage = $request->file('image')->move(public_path('website-images/aboutpage'), $filename);
       
      $expert->name = $request->name; 
      $expert->designation = $request->designation; 
      $expert->paragraph = $request->paragraph; 
      $expert->status = $request->status; 
      $expert->image = $filename;

      $expert->save();

      return redirect('admin/expertdeatil')->with('success','Add Expert Sucessfully');
    }

public function editexpert($id){
    $expert = AddExpert::find($id);
    return view('about.editexpert', compact('expert'));
}


 public function expertedit(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'designation' => 'required|max:30',
        'paragraph' => 'required|max:50',
        'image' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=300,min_height=3400,max_width=400,max_height=500',
        'status' => 'required',
       ]);
      $expert = AddExpert::find($id);
      if($request->hasFile('image')){
        $filename = $request->file('image');
        $imagename = $filename->getClientOriginalName();
        $filename->move('website-images/aboutpage',$imagename);
         // Delete the old image
         $oldImagePath = public_path('website-images/aboutpage/' . $expert->image);
         if (file_exists($oldImagePath)) {
             unlink($oldImagePath);
         }
        $expert->image = $imagename;
       }
       $expert->name = $request->name; 
       $expert->designation = $request->designation; 
       $expert->paragraph = $request->paragraph; 
       $expert->status = $request->status; 
       
       $expert->save();
       return redirect('admin/expertdeatil')->with('success','Update Expert Sucessfully');
 }
}
