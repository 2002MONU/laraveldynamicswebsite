<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Whychoose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class NewController extends Controller
{
    // show News details
    public function newsdetails(){
        $blogs = Blog::get();
        return view('admin.news.newsdetails',compact('blogs'));
    }

    // news form show
    public function addnews(){
        return view('admin.news.addnews');
    }

    public function postnews(Request $request){
         $request->validate([
            'image' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=330,min_height=230,max_width=430,max_height=300',
            'date' => 'required|digits_between:1,2',
            'month' => 'required',
            'heading' => 'required|max:100',
            

         ]);

         $news = new Blog;
          
      $img_extension = $request->file('image')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_extension;
      $pathimage = $request->file('image')->move(public_path('website-images/newsimages'), $filename);

      $news->image = $filename;
      $news->date = $request->date;
      $news->month = $request->month;
      $news->heading = $request->heading;
      $news->status = $request->status;
      $news->save();

      return redirect('admin/newsdetails')->with('success','News Add Successfully');
    }

    public function newsupdate($id){
        $blog = Blog::find($id);
        return view('admin.news.newsupdate', compact('blog'));
    }

    public function newupdate(Request $request,$id){
        $request->validate([
            'image' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=330,min_height=230,max_width=430,max_height=300',
            'date' => 'required|digits_between:1,2',
            'month' => 'required',
            'heading' => 'required|max:100',
          ]);

          $blog = Blog::find($id);
          if($request->hasFile('image')){
            $filename = $request->file('image');
            $imagename = $filename->getClientOriginalName();
            $filename->move('website-images/newsimages',$imagename);
            $blog->image = $imagename;
           }
           $blog->heading = $request->heading;
           $blog->date = $request->date;
           $blog->month = $request->month;
           $blog->status = $request->status;

           $blog->save();
           return redirect('admin/newsdetails')->with('success','News Details Update Successfully');
    }

public function newsdelete($id){
    $image = Blog::where('id', $id)->first();
    if ($image) {
        // Get the path of the images in the public folder
        $imagePath1 = public_path('website-images/newsimages/'. $image->image);
      //  $imagePath2 = public_path('website-images/serviceimages/' . $image->logoimage);
    
        // Check if the files exist before attempting deletion
        if (file_exists($imagePath1)) {
            // Delete the first image
            unlink($imagePath1);
        }
        // if (file_exists($imagePath2)) {
        //     // Delete the second image
        //     unlink($imagePath2);
        // }
    
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
    // $blog = Blog::where('id' ,$id)->delete();
    // return redirect('admin/newsdetails')->with('success','News Delete  Successfully');
}

    public function whychoosedetails(){
        $whychose = Whychoose::find(1);
        return view('admin.whychoose.whychoosedetails', compact('whychose'));
    }

    public function whychooseupdate($id){
       $whychoose = Whychoose::find($id);

       return view('admin.whychoose.whychooseupdate',compact('whychoose'));
    }

     public function whychooseus(Request $request,$id){
            $request->validate([
                'title' => 'required|max:30',
                'heading' => 'required|max:50',
                'paragraph' => 'required|max:100',
                'image1' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=30,min_height=30,max_width=40,max_height=40',
                'image2' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=30,min_height=30,max_width=40,max_height=40',
                'image3' => 'image||mimes:jpeg,png,jpg|max:1024|dimensions:min_width=30,min_height=30,max_width=40,max_height=40',
                'yoexp' => 'required',
                'sacustomer' => 'required',
                'couwsur' => 'required',
            ]);

            $whychose = Whychoose::find($id);

            //image one 
            if($request->hasFile('image1')){
                $filename = $request->file('image1');
                $imagename1 = $filename->getClientOriginalName();
                $filename->move('website-images/whyimages',$imagename1);
                 // Delete the old image
                $oldImagePath1 = public_path('website-images/servicepage/' . $whychose->image1);
                if (file_exists($oldImagePath1)) {
                    unlink($oldImagePath1);
                }
                $whychose->image1 = $imagename1;
               }


               if($request->hasFile('image2')){
                $filename = $request->file('image2');
                $imagename2 = $filename->getClientOriginalName();
                $filename->move('website-images/whyimages',$imagename2);
                  // Delete the old image
                  $oldImagePath2 = public_path('website-images/whyimages/' . $whychose->image2);
                  if (file_exists($oldImagePath2)) {
                      unlink($oldImagePath2);
                  }
                $whychose->image2 = $imagename2;
               }


               if($request->hasFile('image3')){
                $filename = $request->file('image3');
                $imagename3 = $filename->getClientOriginalName();
                $filename->move('website-images/whyimages',$imagename3);
                   // Delete the old image
                   $oldImagePath3 = public_path('website-images/whyimages/' . $whychose->image3);
                   if (file_exists($oldImagePath3)) {
                       unlink($oldImagePath3);
                   }
                $whychose->image3 = $imagename3;
               }


               $whychose->title = $request->title;
               $whychose->heading = $request->heading;
               $whychose->paragraph = $request->paragraph;
               $whychose->yoexp = $request->yoexp;
               $whychose->sacustomer = $request->sacustomer;
               $whychose->couwsur = $request->couwsur;

               $whychose->save();
                
               return redirect('admin/whychoosedetails')->with('success',"Why Choose Us details Update Successfully");
     }

}
