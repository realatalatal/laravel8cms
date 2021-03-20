<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $about = About::find(1);
    return view('cms.about.index', compact('about'));
  }

  public function update(AboutRequest $request, About $about)
  {
    $about_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $about->image;
      Storage::delete('public/images/about/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/about');
      $image = basename($image_path);
      $about_data['image'] = $image;
    }
    $about->update($about_data);
    return back();
  }
}
