<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;
// model user
use App\Models\Member;
use Exception;

class LoginController extends UserController
{
  protected $name;
  protected $pwd;

  // public function __construct()
  // {
  //   parent::__construct();
  // }

  public function login(Request $request)
  {
    // $credentials = $request->only('name', 'password');

    // $check = parent::checkUserExist($request->form['name']);
    // $token = Auth::attempt($credentials);

    $sql = Member::where('name', '=', $request->form['name'])
      // ->Where('password', '=', $request->form['password'])
      ->get();

    foreach ($sql as $key => $value) {
      $databaseName = $value['name'];
      $databasePWD = $value['password'];
    }

    try {
      if (Hash::check($databasePWD, $request->form['password'])) {
        // 密碼正確，login
        // 欄位updated_at寫入登入時間
        echo 'correct';
      } else {
        echo 'wrong';
      }
    } catch (Exception $e) {
      // echo 'wrong';
      throw $e->getMessage();
    }
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
