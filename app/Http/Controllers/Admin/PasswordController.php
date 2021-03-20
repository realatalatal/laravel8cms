<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function showChangePassword()
  {
    // dd('here');
    return view('cms.auth.changePassword');
  }
  public function changePassword(Request $request){
    $validator = Validator::make($request->except(['_token']), [
      'oldPassword' => 'required',
      'password' => 'required|min:8|confirmed'
    ]);
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput()->with('passwordChange', 'fail');
    }
    $password_data = $validator->getData();
    $admin = Admin::find(1);

    $db_password = $admin->password;
    $password = Hash::make($password_data['password']);
    if (Hash::check($password_data['oldPassword'], $db_password)) {
        $admin->update(array('password' => $password));
        return back()->with('passwordChange', 'success');
    } else {
        return back()->with('passwordChange', 'fail');
    }
  }
}
