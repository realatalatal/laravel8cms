<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{
  public function index(){
    $sliders = Slider::all();
    $about = About::find(1);
    $services = Service::where('type', 0)->get();
    $testimonials = Testimonial::all();
    $clients = Client::all();
    return view('front.home', compact(['sliders', 'about', 'services', 'testimonials', 'clients']));
  }
}
