<?php

namespace App\Http\Controllers;
use App\About;
use App\Contact;
use App\Feature;
use App\Organization;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;

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
}
