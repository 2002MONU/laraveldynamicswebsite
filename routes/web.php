<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAddDetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExportdataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\http\Controllers\NrtureController;
use App\Http\Controllers\ExportContactController;
use App\Http\Controllers\LogoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/',[HomeController::class,'index']); // website index page 
Route::post('indexquery',[HomeController::class,'postquery']); // send inquiry 
Route::get('/about',[HomeController::class,'about']); // website about page 
Route::get('service/nrture',[HomeController::class,'service']); // website service nrture page 
Route::get('/blog',[HomeController::class,'blog']);// blog page 
Route::get('/blog-view/{slug}',[HomeController::class,'blogView']); // blog view page 
//Route::get('/latest-news/{slug}',[HomeController::class,'latestNews']);
Route::get('/contact',[HomeController::class,'contact']); // website contact page 


Route::post('/contact',[ContactController::class,'contactpost']);  // contact send message 
//Route::get('account/login',[AdminController::class,'login'])->name('account.login');
Route::group([],function(){
Route::group(['middleware' => 'guest'],function () {
Route::get('account/login',[AdminController::class,'login'])->name('account.login'); // show admin Page 
Route::post('account/login',[AdminController::class,'adminlogin']);// Admin Login
// change -password admin

});

Route::group(['middleware' => 'auth'],function () {
    Route::get('/contactDetails',[AdminController::class,'contactDetails']);
     Route::get('admin/showMessage',[HomeController::class,'showMessage']);
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('account.dashboard');// dashboard
    Route::get('admin/logout',[AdminController::class,'logout']);// logout
    Route::get('admin/updatehome/{id}',[AdminAddDetailsController::class,'updatehome']); // home update form
    Route::post('admin/update/{id}',[AdminAddDetailsController::class,'updatedetail']);// home update 
    Route::get('admin/homedetails',[AdminAddDetailsController::class,'homedetails']);// home details
    Route::get('admin/aboutdetails',[AdminAddDetailsController::class,'aboutdetails']); // show about Details
    Route::get('admin/aboutupdate/{id}',[AdminAddDetailsController::class,'aboutupdate']);// update form
    Route::post('admin/updateabout/{id}',[AdminAddDetailsController::class,'about']);//update about
    Route::get('admin/faqdetails',[AdminAddDetailsController::class,'faqdetails']); // about details
    Route::get('admin/faqupdate/{id}',[AdminAddDetailsController::class,'faqupdate']); // faq update form
    Route::post('admin/fupdate/{id}',[AdminAddDetailsController::class,'updatefaq']);  // faq update form
    Route::get('admin/addservice',[ServiceController::class,'addservice']);  //  service form 
    Route::post('admin/service',[ServiceController::class,'serviceadd']);  // Add service section
    Route::get('admin/servicedetails',[ServiceController::class,'servicedetails']);// show service details
    Route::get('admin/serviceupdate/{id}',[ServiceController::class,'serviceupdate']); // service form
    Route::post('admin/srupdate/{id}',[ServiceController::class,'updateservice']);   // update service details
    Route::get('admin/servicedelete/{id}',[ServiceController::class,'servicedelete']);  
    Route::get('/admin/newsdetails',[NewController::class,'newsdetails']); // show New Details
    Route::get('/admin/addnews',[NewController::class,'addnews']); // news form
    Route::post('/admin/addn',[NewController::class,'postnews']); // add news 
    Route::get('/admin/newsupdate/{id}',[NewController::class,'newsupdate']); // news update form
    Route::post('/admin/nupdate/{id}',[NewController::class,'newupdate']);   // news form update
    Route::get('/admin/newsdelete/{id}',[NewController::class,'newsdelete']);  // News delete
    Route::get('/admin/whychoosedetails',[NewController::class,'whychoosedetails']); // why choose us details
    Route::get('/admin/whychooseupdate/{id}',[NewController::class,'whychooseupdate']); // why choose us update
    Route::post('/admin/whyupdate/{id}',[NewController::class,'whychooseus']);  // why choose us update
   
    // about pages 
    Route::get('/admin/abouthomedetails',[AboutController::class,'abouthomedetails']);
    Route::get('/admin/editabout/{id}',[AboutController::class,'editabout']); // banner update abpout page
    Route::post('/admin/editab/{id}',[AboutController::class,'aboutabout']);
    Route::get('/admin/aboutdetail',[AboutController::class,'about']); // show about page about details

    Route::get('/admin/editaboutpage/{id}',[AboutController::class,'editaboutpage']); //about page about section
    Route::post('/admin/aboutpageditab/{id}',[AboutController::class,'aboutpagedit']);
    Route::get('/admin/aboutmission',[AboutController::class,'aboutmission']); // show about mission
    Route::get('/admin/mission/{id}',[AboutController::class,'mission']);
    Route::post('/admin/missionedit/{id}',[AboutController::class,'missionabout']); // edit about page missin
    Route::get('/admin/expert',[AboutController::class,'expert']);
    Route::post('/admin/addexpert',[AboutController::class,'expertadd']);  //add expert team
    Route::get('/admin/expertdeatil',[AboutController::class,'expertdeatil']); // expert team details
    Route::get('/admin/editexpert/{id}',[AboutController::class,'editexpert']); // update expert details
    Route::post('/admin/updateexpert/{id}',[AboutController::class,'expertedit']);


    // blog page 
    Route::get('/blogpagedetail',[BlogController::class,'blogpagedetail']); //show blog details
    Route::get('/editblog/{id}',[BlogController::class,'editblog']); // edit blog details
    Route::post('/editblogdetail/{id}',[BlogController::class,'editblogdetails']);
    Route::get('/blogdetails',[BlogController::class,'blogdetails']);
    Route::get('/addblog',[BlogController::class,'addblog']); // add blog details
    Route::post('/blogadd',[BlogController::class,'addblogpost']);
    Route::get('/edit-blog-details/{id}',[BlogController::class,'editBlogpost']); // edit blog post form
    Route::post('/blog-details/{id}',[BlogController::class,'blogpostedit']); // submit edit blog post


    // services details nrture

    Route::get('/nrturebanner',[NrtureController::class,'nrturebanner']);
    Route::get('/nrturebannerForm/{id}',[NrtureController::class,'nrturebannerForm']);
    Route::post('/nrturebannerfill/{id}',[NrtureController::class,'nrturebannerpost']);

    Route::get('/servicefeatures',[NrtureController::class,'servicefeatures']); // view service features 
    Route::get('/addfeatures',[NrtureController::class,'addfeatures']); // add feature form
    Route::post('/addservice',[NrtureController::class,'addservicefeatures']); // submit data feature
    Route::get('/updateservice/{id}',[NrtureController::class,'updateservice']); // update data feature form
    Route::post('/updateservicefeature/{id}',[NrtureController::class,'updatefeature']); // update data feature form

   // Change Password 
    Route::get('/account/changePassword',[ChangePasswordController::class,'changePassword']);
    Route::post('/changePassword',[ChangePasswordController::class,'changePasswordSave']);

    // export data of show message

    Route::get('/messagedata',[ExportdataController::class,'exportToCSV']);

    // export data of contact details
   Route::get('/contactexport',[ExportContactController::class,'exportContact']);

  //  delete Blog section
   Route::get('/deleteblog/{id}',[BlogController::class,'deleteblog']);

   // logo change and email and contact number 
   Route::get('/logodetails',[LogoController::class,'logodetails']);
   Route::get('/admin/logochange/{id}',[LogoController::class,'logochange']);
   Route::post('/admin/changelogo/{id}',[LogoController::class,'changelogo']);
});
});