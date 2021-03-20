<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
  public function index()
  {
    $services = Service::where('type', 0)->get();
    return view('front.service.index', compact('services'));
  }

  public function network()
  {
    $services = Service::where('type', 1)->get();
    return view('front.service.network', compact('services'));
  }

  public function development()
  {
    $services = Service::where('type', 2)->get();
    return view('front.service.development', compact('services'));
  }
  
  public function server()
  {
    $services = Service::where('type', 3)->get();
    return view('front.service.server', compact('services'));
  }

  public function show(Service $service)
  {
    $services = Service::where('type', $service->type)->where('id', '!=', $service->id)->get()->take(4);
    return view('front.service.show', compact(['service', 'services']));
  }
}
