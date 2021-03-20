<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DevelopmentRequest;
use App\Models\Development;
use Illuminate\Support\Facades\Storage;

class DevelopmentController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $development = Development::find(1);
    return view('cms.service.development.index', compact('development'));
  }

  public function update(DevelopmentRequest $request, Development $development)
  {
    $development_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $development->image;
      Storage::delete('public/images/development/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/service/development');
      $image = basename($image_path);
      $development_data['image'] = $image;
    }
    if($request->hasFile('icon')){
      $pre_icon = $development->icon;
      Storage::delete('public/images/development/' . $pre_icon);
      $icon_path = $request->file('icon')->store('public/images/service/development');
      $icon = basename($icon_path);
      $development_data['icon'] = $icon;
    }
    $development->update($development_data);
    return back();
  }
  
}
