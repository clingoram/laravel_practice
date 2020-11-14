<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 對應model
use App\Merchandise;
// use App\Auth;

// DB
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MerchandiseController extends Controller
{
    // home
    public function index()
    {
        // to show all rows of datas from table merchandises in index.blade.php
        $products = Merchandises::get();//DB::table('merchandises')->get();

        return view('site.index',['items'=> $products]);

    }

    // 管理員上傳商品頁面
    public function create()
    {
        $user = Auth::user();

        if($user->role == 'A'){
            // if admin is login
            $direct_page = 'site.product_management';
        }else{
            // to login page
            $direct_page = 'auth.login';
        }

        return view($direct_page);
    }

    // // 更新商品
    // public function update()
    // {

    // }
}
