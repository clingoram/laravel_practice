<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DateTime;

use App\Users;

class UserController extends Controller
{
    private $user;
    private $email;
    private $password;

    public function __construct(string $user, string $email, string $pwd)
    {
        $this->user = $user;
        $this->email = $email;
        $this->password = $pwd;
    }

    public function checkExist($data)
    {
        $find_user = Users::where('name', $data['name'])->exists();

        if ($find_user === true) {
            return response()->json(['message' => '帳號重複', 'status_code' => 409], 409);
        }
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
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $this->validator($request->all());
        $this->checkExist($data['name']);

        $now = new DateTime();

        return Users::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'M',
            'updated_at' => $now,
            'created_at' => $now
        ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        $token = Auth::attempt($credentials);

        if (!$token) {
            return $this->response->error('登入失敗', 401);
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
