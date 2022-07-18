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
use App\Models\Member;

class RegisterController extends UserController
{

  public function register(Request $request)
  {
    // $data = $request->all();
    parent::validator($request->all());
    // parent::checkUserExist($request->form['name']);
    // parent::checkUserExist();

    $now = new DateTime();

    if (parent::checkUserExist($request->form['name']) === true) {
      return Member::create([
        'name' => $request->form['name'],
        'email' => $request->form['email'],
        'password' => Hash::make($request->form['password']),
        'role' => $request->form['role'],
        'updated_at' => $now,
        'created_at' => $now
      ]);
    }

    // DB::table('users')->insert([
    //   'name' => $request->form['name'],
    //   'email' => $request->form['email'],
    //   'password' => Hash::make($request->form['password']),
    //   'role' => $request->form['role'],
    //   'updated_at' => $now,
    //   'created_at' => $now
    // ]);
  }
}
