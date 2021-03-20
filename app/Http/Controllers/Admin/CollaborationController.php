<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CollaborationRequest;
use App\Models\Collaboration;
use Illuminate\Support\Facades\Storage;

class CollaborationController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $collaboration = Collaboration::find(1);
    return view('cms.about.collaboration', compact('collaboration'));
  }

  public function update(CollaborationRequest $request, Collaboration $collaboration)
  {
    $collaboration_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $collaboration->image;
      Storage::delete('public/images/about/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/about');
      $image = basename($image_path);
      $collaboration_data['image'] = $image;
    }
    $collaboration->update($collaboration_data);
    return back();
  }
}
