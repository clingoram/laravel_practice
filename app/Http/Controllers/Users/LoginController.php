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

  public function login()
  {
    // $credentials = $request->only('name', 'password');

    // $token = Auth::attempt($credentials);

    $sql = Member::where('name', '=', $this->user)
      // ->Where('password', '=', $request->form['password'])
      ->get();

    foreach ($sql as $key => $value) {
      $databaseValueID = $value['id'];
      $databaseValueName = $value['name'];
      $databaseValuePWD = $value['password'];
    }

    if (Hash::check($this->password, $databaseValuePWD)) {
      // 密碼正確，login
      // 欄位updated_at寫入登入時間
      echo 'correct';

      $now = new DateTime();
      $updateLogin = Member::find($databaseValueID);
      $updateLogin->updated_at = $now;
      $updateLogin->save();
    } else {
      // redirect to login page and clear all inputs.
      echo 'something wrong';
      // return redirect('/login');
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
