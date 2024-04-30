<?php

namespace App\Rules;
use Closure;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class GoogleRecaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) { 
        $data = array('secret' => env('GOOGLE_RECAPTCHA_SECRET'), 
            'response' => $value); 
  
        try { 
            $verify = curl_init(); 
            curl_setopt($verify, CURLOPT_URL,  
"https://www.google.com/recaptcha/api/siteverify"); 
            curl_setopt($verify, CURLOPT_POST, true); 
            curl_setopt($verify, CURLOPT_POSTFIELDS,  
                        http_build_query($data)); 
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false); 
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true); 
            $response = curl_exec($verify); 
  
            return json_decode($response) -> success; 
        } 
        catch (\Exception $e) { 
            return false; 
        } 
    } 
  
    public function message() { 
        return 'ReCaptcha verification failed.'; 
    } 

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    // public function validate(string $attribute, mixed $value, Closure $fail): void
    // {
    //     $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
    //         'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
    //         'response' => $value
    //     ]);

    //     if (!$response->json()["success"] ?? false) {
    //         $fail('Google reCaptcha validation required.');
    //     }
    // }
    // /**
    //  * Get the validation error message.
    //  *
    //  * @return string
    //  */
    // public function message()
    // {
    //     return 'The validation error message.';
    // }
}
