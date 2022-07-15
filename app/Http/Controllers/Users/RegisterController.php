<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
// model user
use App\Models\Members;

class RegisterController extends UserController
{

  public function register(Request $request)
  {
    $data = $request->all();
    parent::validator($request->all());
    parent::checkUserExist($data['name']);

    $now = new DateTime();

    // if ($this->checkUserExist($data['name']) === true) {
    // return Members::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password']),
    //     'role' => $data['role'],
    //     'updated_at' => $now,
    //     'created_at' => $now
    // ]);
    // }

    DB::table('users')->insert([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'role' => $request->role,
      'updated_at' => $now,
      'created_at' => $now
    ]);

    // $data = new Members();
    // $data->name = $request->name;
    // $data->email = $request->email;
    // $data->password = Hash::make($request->password);
    // $data->role = $request->role;
    // $data->updated_at = $now;
    // $data->created_at = $now;

    // $data->save();
  }
}
