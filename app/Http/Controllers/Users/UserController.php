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

// class UserController extends Controller
// {
//     private $user;
//     private $email;
//     private $password;

//     // public function __construct(string $user, string $email, string $pwd)
//     // {
//     //     $this->user = $user;
//     //     $this->email = $email;
//     //     $this->password = $pwd;
//     // }

//     public function checkExist($data)
//     {
//         $find_user = Members::where('name', $data['name'])->exists();
//         if ($find_user !== false) {
//             return response()->json(['message' => '帳號重複', 'status_code' => 409], 409);
//         }
//         return true;
//     }
//     /**
//      * Get a validator for an incoming registration request.
//      *
//      * @param  array  $data
//      * @return \Illuminate\Contracts\Validation\Validator
//      */
//     protected function validator(array $data)
//     {
//         return Validator::make($data, [
//             'name' => ['required', 'string', 'max:30'],
//             'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
//             'password' => ['required', 'string', 'min:8', 'confirmed'],
//             'role' => ['required', 'string']
//         ]);
//     }

//     // public function register(Request $request)
//     // {
//     //     $data = $request->all();
//     //     $this->validator($request->all());
//     //     $this->checkExist($data['name']);

//     //     $now = new DateTime();

//     //     // if ($this->checkExist($data['name']) === true) {
//     //     // return Members::create([
//     //     //     'name' => $data['name'],
//     //     //     'email' => $data['email'],
//     //     //     'password' => Hash::make($data['password']),
//     //     //     'role' => $data['role'],
//     //     //     'updated_at' => $now,
//     //     //     'created_at' => $now
//     //     // ]);
//     //     // }

//     //     DB::table('users')->insert([
//     //         'name' => $request->name,
//     //         'email' => $request->email,
//     //         'password' => Hash::make($request->password),
//     //         'role' => 'A',
//     //         'updated_at' => $now,
//     //         'created_at' => $now
//     //     ]);
//     //     // $data = new Members();
//     //     // $data->name = $request->name;
//     //     // $data->email = $request->email;
//     //     // $data->password = Hash::make($request->password);
//     //     // $data->role = $request->role;
//     //     // $data->updated_at = $now;
//     //     // $data->created_at = $now;

//     //     // $data->save();
//     // }

//     // public function login(Request $request)
//     // {
//     //     $credentials = $request->only('name', 'password');

//     //     $token = Auth::attempt($credentials);

//     //     if (!$token) {
//     //         return $this->response->error('登入失敗', 401);
//     //     }

//     //     // if (Auth::check()) {
//     //     //     $insert_data = Auth::user();
//     //     //     // insert data into userlogs
//     //     //     $insert_userlog = Userlog::create([
//     //     //         'member_id' => $insert_data->id,
//     //     //         'note' => $insert_data->name . '已登入',
//     //     //         'updated_at' => date("Y-m-d h:i:s a", time()),
//     //     //     ]);
//     //     // }
//     // }
// }

abstract class UserController extends Controller
{
    public $user;
    private $email;
    private $password;

    public function __construct(string $user, string $email, string $pwd)
    {
        $this->user = $user;
        $this->email = $email;
        $this->password = $pwd;
    }

    public function checkUserExist()
    {
        // $find_user = Members::where('name', $this->user)->exists();

        $find_user = DB::table('users')
            ->where('name', '=', $this->user)
            ->get();


        // $find_user = DB::table('users')
        //     ->where('name', '=', $data)
        //     ->get();


        if ($find_user !== false) {
            return response()->json(
                [
                    'message' => '帳號錯誤',
                    'status' => false
                ],
                409
            );
        }
        return $find_user;
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

    /**
     * When user register,create an random unique token.
     */
    // public function generateToken(): string
    // {
    // }
}
