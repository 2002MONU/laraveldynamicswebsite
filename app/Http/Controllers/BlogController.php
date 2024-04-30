<?php

namespace App\Http\Controllers;

use App\Models\Blogbanner;
use App\Models\Blogsection;
use Illuminate\Http\Request;

class BlogController extends Controller
{
        public function blogpagedetail(){
           $blogpage = Blogbanner::find(1);
            return view('blogpage.blogdetails', compact('blogpage'));
        }

        public function editblog($id){
            $blogpage = Blogbanner::find($id);
            return view('blogpage.editblog', compact('blogpage'));
        }

        public function editblogdetails(Request $request,$id){
            $request->validate([
                'heading' => 'required|30',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1500,min_height=1000,max_width=2300,max_height=1500',
            ]);
          
            $blogpage = Blogbanner::find($id);
            if($request->hasFile('image')){
                $filename = $request->file('image');
                $imagename = $filename->getClientOriginalName();
                $filename->move('website-images/blogpage',$imagename);
                 // Delete the old image
                $oldImagePath = public_path('website-images/blogpage/' . $blogpage->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $blogpage->image = $imagename;
               }
               
               $blogpage->heading = $request->heading;
               $blogpage->save();

               return redirect('blogpagedetail')->with('success','Banner Page Update Successfully');
            }

            public function blogdetails(){
                $blogpost = Blogsection::get();
                return view('blogpage.blogdeatilsblog', compact('blogpost'));
            }

            public function addblog(){
                return view('blogpage.addblog');
            }


            public function addblogpost(Request $request){
                $request->validate([
                    'title' => 'required|max:50',
                    'description' => 'required|100',
                    'slug' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=500,max_width=1000,max_height=650',
                    'status' => 'required',
                ]);
                 
                   $blogpost = new Blogsection;
                    $img_extension = $request->file('image')->getClientOriginalExtension();
                    $name =  time() . '.' . $img_extension;
                    $pathimage = $request->file('image')->move(public_path('website-images/blogpage'), $name); //image save public folder  

                    $blogpost->title = $request->title;
                    $blogpost->description = $request->description;
                    $blogpost->status = $request->status;
                    $blogpost->slug = $request->slug;
                    $blogpost->image = $name;
                     $blogpost->save();

                     return redirect('blogdetails')->with('success','Blog Post Submit Successfully');

            }

            public function editBlogpost($id){
                $blog = Blogsection::find($id);
                return view('blogpage.edit-blog',compact('blog'));
            }

            public function blogpostedit(Request $request,$id){
                $request->validate([
                    'title' => 'required|max:50',
                    'image' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=500,max_width=1000,max_height=650',
                    'description' => 'required|max:100',
                    'slug' => 'required',
                ]); 
                $blog = Blogsection::find($id);
                if($request->hasFile('image')){
                    $filename = $request->file('image');
                    $imagename = $filename->getClientOriginalName();
                    $filename->move('website-images/blogpage',$imagename);
                     // Delete the old image
                $oldImagePath = public_path('website-images/blogpage/' . $blog->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                    $blog->image = $imagename;
                   }
                   $blog->description = $request->description;
                   $blog->slug = $request->slug;
                   $blog->title = $request->title;
                   $blog->status = $request->status;
                   $blog->save();
                   return redirect('blogdetails')->with('success','Blog Post Update Successfully');

            }

            public function deleteblog($id){
                $image = Blogsection::where('id', $id)->first();
                if ($image) {
                    // Get the path of the images in the public folder
                    $imagePath1 = public_path('website-images/blogpage/' . $image->image);
            
                
                    // Check if the files exist before attempting deletion
                    if (file_exists($imagePath1)) {
                        // Delete the first image
                        unlink($imagePath1);
                    }
                    
                    // Delete the record from the database
                    $image->delete();
                    
                    return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
                } else {
                    return redirect()->back()->with('error', 'Image record not found.');
                }
            }
}
