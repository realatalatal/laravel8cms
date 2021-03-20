<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServerRequest;
use App\Models\Server;
use Illuminate\Support\Facades\Storage;

class ServerController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function index(){
    $server = Server::find(1);
    return view('cms.service.server.index', compact('server'));
  }

  public function update(ServerRequest $request, Server $server)
  {
    $server_data = $request->validated();
    if($request->hasFile('image')){
      $pre_image = $server->image;
      Storage::delete('public/images/service/server/' . $pre_image);
      $image_path = $request->file('image')->store('public/images/service/server');
      $image = basename($image_path);
      $server_data['image'] = $image;
    }
    if($request->hasFile('icon')){
      $pre_icon = $server->icon;
      Storage::delete('public/images/service/server/' . $pre_icon);
      $icon_path = $request->file('icon')->store('public/images/service/server');
      $icon = basename($icon_path);
      $server_data['icon'] = $icon;
    }
    $server->update($server_data);
    return back();
  }

}
