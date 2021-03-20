<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $clients = Client::all();
    return view('cms.client.index', compact('clients'));
  }

  public function store(ClientRequest $request){
    $client_data = $request->validated();
    $image_path = $request->file('file')->store('public/images/client');
    $image = basename($image_path);
    $client_data['image'] = $image;
    Client::create($client_data);
  }

  public function destroy(Client $client)
  {
    $pre_image = $client->image;
    Storage::delete('public/images/client/' . $pre_image);
    $client->delete();
    return back();
  }

  
}
