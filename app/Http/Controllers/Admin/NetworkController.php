<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NetworkRequest;
use App\Models\Network;
use Illuminate\Support\Facades\Storage;

class NetworkController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $network = Network::find(1);
    return view('cms.service.network.index', compact('network'));
  }

  public function update(NetworkRequest $request, Network $network)
  {
    $network_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $network->image;
      Storage::delete('public/images/service/network/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/service/network');
      $image = basename($image_path);
      $network_data['image'] = $image;
    }
    if($request->hasFile('icon')){
      $pre_icon = $network->icon;
      Storage::delete('public/images/service/network/' . $pre_icon);
      $icon_path = $request->file('icon')->store('public/images/service/network');
      $icon = basename($icon_path);
      $network_data['icon'] = $icon;
    }
    $network->update($network_data);
    return back();
  }

}
