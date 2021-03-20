<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $sliders = Slider::all();
    return view('cms.slider.index', compact('sliders'));
  }

  public function create()
  {
    return view('cms.slider.create');
  }

  public function store(SliderRequest $request)
  {
    $slider_data = $request->validated();
    $image_path = $request->file('image')->store('public/images/slider');
    $image = basename($image_path);
    $slider_data['image'] = $image;
    Slider::create($slider_data);
    return redirect(route('admin.slider.index'));
  }

  public function edit(Slider $slider)
  {
    return view('cms.slider.edit', compact('slider'));
  }

  public function update(SliderRequest $request, Slider $slider)
  {
    $slider_data = $request->validated();
    if ($request->hasFile('image')){
      $pre_image = $slider->image;
      Storage::delete('public/images/slider/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/slider');
      $image = basename($image_path);
      $slider_data['image'] = $image;
    }
    $slider->update($slider_data);
    return redirect(route('admin.slider.index'));
  }

  public function destroy(Slider $slider)
  {
    $pre_image = $slider->image;
    Storage::delete('public/images/slider/' . $pre_image);
    $slider->delete();
    return back();
  }
}
