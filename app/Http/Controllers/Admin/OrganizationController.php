<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrganizationRequest;
use App\Models\Organization;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $organization = Organization::find(1);
    return view('cms.about.organization', compact('organization'));
  }

  public function update(OrganizationRequest $request, Organization $organization)
  {
    $organization_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $organization->image;
      Storage::delete('public/images/about/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/about');
      $image = basename($image_path);
      $organization_data['image'] = $image;
    }
    $organization->update($organization_data);
    return back();
  }
}
