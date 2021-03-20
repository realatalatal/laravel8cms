<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $testimonials = Testimonial::all();
    return view('cms.testimonial.index', compact('testimonials'));
  }

  public function create()
  {
    return view('cms.testimonial.create');
  }

  public function store(TestimonialRequest $request)
  {
    $testimonial_data = $request->validated();
    $image_path = $request->file('image')->store('public/images/testimonial');
    $image = basename($image_path);
    $testimonial_data['image'] = $image;
    Testimonial::create($testimonial_data);
    return redirect(route('admin.testimonial.index'));
  }

  public function edit(Testimonial $testimonial)
  {
    return view('cms.testimonial.edit', compact('testimonial'));
  }

  public function update(TestimonialRequest $request, Testimonial $testimonial)
  {
    $testimonial_data = $request->validated();
    if ($request->hasFile('image')){
      $pre_image = $testimonial->image;
      Storage::delete('public/images/testimonial/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/testimonial');
      $image = basename($image_path);
      $testimonial_data['image'] = $image;
    }
    $testimonial->update($testimonial_data);
    return redirect(route('admin.testimonial.index'));
  }

  public function destroy(Testimonial $testimonial)
  {
    $pre_image = $testimonial->image;
    Storage::delete('public/images/testimonial/' . $pre_image);
    $testimonial->delete();
    return back();
  }
}
