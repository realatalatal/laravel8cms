<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AimRequest;
use App\Models\Aim;
use Illuminate\Support\Facades\Storage;

class AimController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $aim = Aim::find(1);
    return view('cms.about.aim', compact('aim'));
  }

  public function update(AimRequest $request, Aim $aim)
  {
    $aim_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $aim->image;
      Storage::delete('public/images/about/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/about');
      $image = basename($image_path);
      $aim_data['image'] = $image;
    }
    $aim->update($aim_data);
    return back();
  }
}
