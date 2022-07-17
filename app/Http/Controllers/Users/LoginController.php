<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;
// model user
use App\Models\Members;

class LoginController extends UserController
{
  public function login(Request $request)
  {
    // $credentials = $request->only('name', 'password');

    // $check = parent::checkUserExist($request['name']);
    // $token = Auth::attempt($credentials);

    DB::table('users')
      ->where('name', '=', $request->name)
      ->dump();

    // if (!$token) {
    //   return $this->response->error('登入失敗', 401);
    // }
    // if (Hash::check('secret', $request['passwrod'])) {
    //密碼正確
    // }

    // if (Auth::check()) {
    //     $insert_data = Auth::user();
    //     // insert data into userlogs
    //     $insert_userlog = Userlog::create([
    //         'member_id' => $insert_data->id,
    //         'note' => $insert_data->name . '已登入',
    //         'updated_at' => date("Y-m-d h:i:s a", time()),
    //     ]);
    // }
  }
}
