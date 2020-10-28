<?php

namespace App\Http\Controllers;
use App\About;
use App\Contact;
use App\Feature;
use App\Mail\Journalista;
use App\Organization;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;
use Mail;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class WebController extends Controller
{
    public function index(){
        $slider=Slider::first();
        $feature=Feature::all();
        $organization=Organization::all();
        $testimonial=Testimonial::all();
        $about=About::all();
        return view('index',[
            'slider'=>$slider,
            'feature'=>$feature,
            'organization'=>$organization,
            'testimonial'=>$testimonial,
            'about'=>$about,
        ]);
    }
    public function contact(){

      return view('contact');
    }
    public function SendMail(){
        Mail::send(new Journalista());
        session()->flash("success"," Your Message Has been sent successfully");
        return  back();
    }
    public function Newsletter( Request $request){
        $this->validate($request,
            [
                'email'=>'required|string|email:rfc,dns',

            ]);
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', 'Thanks For Subscribe');
        }
        return redirect('/')->with('failure', 'Sorry! You have already subscribed ');


    }
}
