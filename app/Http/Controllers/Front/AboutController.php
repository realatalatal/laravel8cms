<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Aim;
use App\Models\Collaboration;
use App\Models\Organization;

class AboutController extends Controller
{
  public function index()
  {
    $about = About::find(1);
    $aim = Aim::find(1);
    $collaboration = Collaboration::find(1);
    $organization = Organization::find(1);
    return view('front.about.index', compact(['about', 'aim', 'organization', 'collaboration']));
  }
}
