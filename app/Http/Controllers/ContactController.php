<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactform;
use App\Http\Controllers\mixed;
use App\Rules\NoUrl;
use Illuminate\Support\Facades\Http;
use Closure;
class ContactController extends Controller
{
    public function contactpost(Request $request){
      $request->validate([
        'name' => 'required|max:25',
        'email' => 'required|email',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'service' => 'required',
        'message' => ['required|max:300', 'string', new NoUrl],
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
    
         $contactform = new Contactform;
         $contactform->name = $request->name;
         $contactform->email = $request->email;
         $contactform->phone = $request->phone;
         $contactform->service = $request->service;
         $contactform->message = $request->message;
         $contactform->save();
         return redirect('/contact')->with('success','Email Send Successfully');
    }


}
