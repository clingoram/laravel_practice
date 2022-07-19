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

abstract class UserController extends Controller
{
    public $user;
    protected $email;
    protected $password;
    protected $role;

    public function __construct(Request $data)
    {
        $this->user = $data->form['name'];
        $this->email = isset($data->form['email']) and !empty($data->form['email']) ? $data->form['email'] : null;
        $this->password = $data->form['password'];
        $this->role = isset($data->form['role']) and !empty($data->form['role']) ? $data->form['role'] : 'M';
    }

    /**
     * 檢查資料庫內是否有該筆資料存在
     */
    public function checkUserExist(): bool
    {
        $sqlName = Member::where('name', $this->user)->get();
        $sqlEmail = Member::where('email', $this->email)->get();

        if ($sqlName or $sqlEmail) {
            // found user
            return false;
        };
        return true;
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'role' => ['required', 'string']
        ]);
    }
}
