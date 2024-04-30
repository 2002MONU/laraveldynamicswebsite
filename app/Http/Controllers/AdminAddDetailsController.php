<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Faq;
class AdminAddDetailsController extends Controller
{
    public function updatehome($id){
        $home = Home::find($id);
        return view('admin.addhome',compact('home'));
    }

       public function homedetails(){
        $home = Home::find(1);
        return view('admin.homedetails',compact('home'));
       }
    public function updatedetail(Request $request,$id){
        $request->validate([
            'title' => 'required|max:30',
            'heading' => 'required|max:25',
            'bgimage' => 'image|mimes:jpeg,png,jpg|max:2048||dimensions:min_width=1000,min_height=800,max_width=1900,max_height=1600',
        ]);

          $home = Home::find($id);
          if($request->hasfile('bgimage')){
            $file = $request->file('bgimage');
            $name = $file->getClientOriginalName();
            $file->move('website-images/homeimages',$name);
             // Delete the old image
           $oldImagePath = public_path('website-images/homeimages/' . $home->bgimage);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
            $home->bgimage = $name; 
          }

          $home->title = $request->title;
          $home->heading = $request->heading;
          $home->save();

          return redirect('admin/homedetails')->with('success','Home Update Successfully');
    }

    public function aboutdetails(){
        $abouts = About::find(1);
        return view('admin.aboutdetails',compact('abouts'));
    }

    public function aboutupdate($id){
        $about = About::find($id);
        return view('admin.aboutupdate',compact('about'));
    }
    public function about(Request $request ,$id ){
         $request->validate([
            'title' => 'required|max:25',
            'heading' => 'required|max:70',
            'paragraph1' => 'required|max:250',
            'paragraph2' => 'required|max:400',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=550,min_height=400,max_height=600,max_width=900',
         ]);

         $about = About::find($id);

         if($request->hasFile('image')){
            $filename = $request->file('image');
            $name = $filename->getClientOriginalName();
            $filename->move('website-images/aboutimages',$name);
            // delete old image
            $oldImagePath = public_path('website-images/aboutimages/' . $about->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $about->image = $name;
         }

         $about->title = $request->title;
         $about->heading = $request->heading;
         $about->paragraph1 = $request->paragraph1; 
         $about->paragraph2 = $request->paragraph2;
         $about->save();
         
         return redirect('admin/aboutdetails')->with('success','About Update Successfully');
    }
     
    public function faqdetails(){
        $faq = Faq::find(1);
        return view('admin.faqdetails',compact('faq'));
    }

    public function faqupdate($id){
        $faq = Faq::find($id);
        return view('admin.faqupdate', compact('faq'));
    }

      public function updatefaq(Request $request,$id){
           $request->validate([
            'title' => 'required|max:30',
            'heading' => 'required|max:50',
            'paragraph' => 'required|max:300',
            'faqq1' => 'required|max:100',
            'faqans1' => 'required|max:150',
            'faqq2' => 'required|max:100',
            'faqans2' => 'required|max:150',
            'faqq3' => 'required|max:100',
            'faqans3' => 'required|max:150',
             ]);

             $faq = Faq::find($id);
             $faq->title = $request->title;
             $faq->heading = $request->heading;
             $faq->paragraph = $request->paragraph;
             $faq->faqq1 = $request->faqq1;
             $faq->faqans1 = $request->faqans1;
             $faq->faqq2 = $request->faqq2;
             $faq->faqans2 = $request->faqans2;
             $faq->faqq3 = $request->faqq3;
             $faq->faqans3 = $request->faqans3;
             $faq->save();

             return redirect('admin/faqdetails')->with('success','Faq Deatils Edit Successfully');
      }

  }
