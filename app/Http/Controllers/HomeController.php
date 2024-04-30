<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Whychoose;
use App\Models\Enquiry;
use App\Models\Aboutpage;
use App\Models\Aboutmission;
use App\Models\AboutSection;
use App\Models\AddExpert;
use App\Models\Blogbanner;
use App\Models\Blogsection;
use App\Models\Servicelink;
use App\Rules\NoUrl;
use App\Models\ServiceNrtureBanner;
use App\Models\ServiceFeature;
//use App\Rules\GoogleRecaptcha;
use Closure;
use App\Models\Logo;
//use App\Validators\ReCaptcha;
use App\Http\Controllers\mixed;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    public function index() {
       //  $sections = Servicelink::get();
        $home = Home::find(1);
        $about = About::find(1);
        $faq = Faq::find(1);
        $services = Service::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->get();
        $whychoose = Whychoose::find(1);
        $logo = Logo::find(1);
         return view('index', compact('home', 'about', 'faq', 'services', 'blogs', 'whychoose', 'logo'));
    }
    
    public function  about() {
        $aboutpage = Aboutpage::find(1);
        $aboutab = AboutSection::find(1);
        $aboutmission = Aboutmission::find(1);
        $expert = AddExpert::where('status', 1)->get();
        $logo = Logo::find(1);
        return view('about',compact('aboutpage', 'aboutab', 'aboutmission', 'expert', 'logo'));
     }
     
     public function service() {
      $nrturebanner = ServiceNrtureBanner::find(1);
      $whychoose = Whychoose::find(1);
      $servicefeature = ServiceFeature::where('status', 1)->get();
     // $serviceslink = Servicelink::where('slug', $slug)->first();
     $logo = Logo::find(1);
         return view('nrture', compact('whychoose', 'nrturebanner', 'servicefeature', 'logo'));
     }
     
     public function blog() {
        $blogpage = Blogbanner::find(1);
        $blogs = Blogsection::where('status', 1)->get();
        $logo = Logo::find(1);
         return view('blog', compact('blogpage', 'blogs', 'logo'));
     }
     
     public function  contact() {
      $logo = Logo::find(1);
         return view('contact', compact('logo'));
     }

     public function postquery(Request $request){
      // return dd($request);
        $request->validate([
            'fname' => ['required', 'string', new NoUrl],
            'lname' => ['required', 'string', new NoUrl],
            'email' => 'required|email',
            'message' => ['required', 'string', new NoUrl],
            'g-recaptcha-response' => 
            ['required', function (string $attribute,  $value, Closure $fail) {
               $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
              'secret' => Config('services.recaptcha.secret_key'),
              'response' => $value,
              'remoteip' => \request()->ip()
               ]);
             //  dd($g_response->json());
              if (!$g_response->json('success')) {
                  $fail("The {$attribute} is invalid.");
              }
          },]
        ]);
          
        $enqury = new Enquiry;
        $enqury->fname = $request->fname;
        $enqury->lname = $request->lname;
        $enqury->email = $request->email;
        $enqury->message = $request->message;
        $enqury->save();
       
        return redirect('/')->with('success','Enquiry Send Successfully');

     }


     public function showMessage(){
       $enquiry = Enquiry::orderBy('id','desc')->paginate(2);
       return view('admin.enquiry',compact('enquiry'));
     }

     // blog view 
   public function blogView($slug){
    $blogpage = Blogbanner::find(1);
    $logo = Logo::find(1);
    $blog = Blogsection::where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
  $blogview = Blogsection::where('slug', $slug)->first();
    return view('blog-view' ,compact('blogview', 'blogpage' ,'blog', 'logo'));
   }
  

  //   // blog page latest news
  //  public function latestNews($slug){
  //   $blog = Blogsection::orderBy('created_at', 'desc')->limit(2)->get();
  //   $blogview = Blogsection::where('slug', $slug)->first();
  //   return view('blog-view', compact('blog'));
  //  }

}
