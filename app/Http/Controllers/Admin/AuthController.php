<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        if (auth()->user()) {
          return redirect(route('admin.dashboard'));
        }
        return view('cms.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
          'username' => 'required',
          'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect(route('admin.dashboard'));
        } else {
            return redirect(route('admin.dashboard'));

            // return back()->with('login', 'failed')->with('username', $request->username);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'))->with('logout', 'success');
    }

    public function showChangePassword()
    {
      // dd('here');
      return view('cms.auth.changePassword');
    }
    public function changePassword(Request $request){
      $validator = Validator::make($request->except(['_token']), [
        'oldPassword' => 'required',
        'password' => 'required|confirmed'
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
