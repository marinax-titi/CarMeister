<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUser;
use DB;
use Session;
use Hash;

class AdminUserController extends Controller
{

  // Admin Register Index
  public function index()
  {
    $users = AdminUser::get();
    return view('admin/index-register', ['users' => $users]);
  }

  // Admin Register
  public function create(Request $request)
  {
    return view('admin/register-admin');
  }

  // Admin Store Register
  public function store(Request $request)
  {
    $data = new AdminUser;
    $data->name = $request->name;
    $data->password = bcrypt($request['password']);
    $data->email = $request->email;
    $data->user_type = $request->user_type;
    $data->save();

    return redirect()->route('admin.register.index');
  }

  // Admin Do Login
  public function doLogin(Request $request)
  {
    $email = $request->email;

    $getLogin = AdminUser::where('email',$email)->first();
    // Check validation
    if($getLogin && Hash::check($request['password'], $getLogin->password)){
      return redirect()->route('admin.register.index');
    }else{
      return redirect()->back()->withInput()->with('message', 'These credentials do not match our records.');
    }
  }

  // Admin Edit
  public function edit($id)
  {
    $users = AdminUser::findOrFail($id);
    return view('admin/edit-admin', [
      'id' => $id,
      'users' => $users
      ]);
  }

  // Admin Update
  public function update(Request $request, $id)
  {
    $users = AdminUser::find($id);
    $users->name = $request->name;
    $users->password = bcrypt($request['password']);
    $users->email = $request->email;
    $users->user_type = $request->user_type;
    $users->update();

    return redirect()->route('admin.register.index');
  }

  // Admin Delete
  public function delete($id)
  {
    $users = AdminUser::find($id);
    $users->delete();

    return redirect()->route('admin.register.index');
  }

}
