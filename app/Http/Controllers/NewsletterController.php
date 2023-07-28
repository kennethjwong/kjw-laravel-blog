<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    //
    public function __invoke(Newsletter $newsletter) {
        request()->validate(['email'=>'required|email']);
    
        try {
            $newsletter->subscribe(request('email'));
        
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email'=>'Cannot add this email to newsletter list!!'
            ]);
        }
    //    ddd($response);
        return redirect('/')->with('success', 'You\'re now signed up for our newsletter!');
    }
}
