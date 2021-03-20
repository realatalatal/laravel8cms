<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InfoRequest;
use App\Models\Info;

class InfoController extends Controller
{
  public function index()
  {
    $info = Info::find(1);
    return view('cms.info.index', compact('info'));
  }

  public function update(InfoRequest $request, Info $info){
    $info_data = $request->validated();
    $info->update($info_data);
    return back();
  }
}
