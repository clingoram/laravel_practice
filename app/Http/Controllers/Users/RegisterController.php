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

  /**
   * 註冊
   */
  public function register()
  {
    // $data = $request->all();
    // parent::validator($request->all());

    $now = new DateTime();

    // 檢查是否有該筆資料存在
    if (parent::checkUserExist() === true) {
      return Member::create([
        'name' => $this->user,
        'email' => $this->email,
        'password' => Hash::make($this->password),
        'role' => $this->role,
        'updated_at' => $now,
        'created_at' => $now
      ]);
    } else {
      echo '帳號' . $this->user . '無法註冊。';
    }
  }
}
