<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $services = Service::all();
    return view('cms.service.index', compact('services'));
  }

  public function create()
  {
    return view('cms.service.create');
  }

  public function store(ServiceRequest $request)
  {
    $service_data = $request->validated();
    $image_path = $request->file('image')->store('public/images/service');
    $image = basename($image_path);
    $service_data['image'] = $image;
    $icon_path = $request->file('icon')->store('public/images/service');
    $icon = basename($icon_path);
    $service_data['icon'] = $icon;
    Service::create($service_data);
    return redirect(route('admin.service.index'));
  }

  public function edit(Service $service)
  {
    return view('cms.service.edit', compact('service'));
  }

  public function update(ServiceRequest $request, Service $service)
  {
    $service_data = $request->validated();
    if ($request->hasFile('image')){
      $pre_image = $service->image;
      Storage::delete('public/images/service/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/service');
      $image = basename($image_path);
      $service_data['image'] = $image;
    }
    if ($request->hasFile('icon')){
      $pre_icon = $service->icon;
      Storage::delete('public/images/service/' . $pre_icon);
      $icon_path = $request->file('icon')->store('public/images/service');
      $icon = basename($icon_path);
      $service_data['icon'] = $icon;
    }
    $service->update($service_data);
    return redirect(route('admin.service.index'));
  }

  public function destroy(Service $service)
  {
    $pre_image = $service->image;
    Storage::delete('public/images/service/' . $pre_image);
    $pre_icon = $service->icon;
    Storage::delete('public/images/service/' . $pre_icon);
    $service->delete();
    return back();
  }
}
