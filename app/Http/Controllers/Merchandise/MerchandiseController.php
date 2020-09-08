<?php

namespace App\Http\Controllers\Merchandise;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 對應model
use App\Http\Models\Merchandise;
// DB
use Illuminate\Support\Facades\DB;

class MerchandiseController extends Controller
{
    // private function _construct()
    // {
        
    // }
    public function index()
    {
        // to show all rows of datas from table merchandises in index.blade.php
        $products = DB::table('merchandises')->get();

        return view('index',['title'=>'My project','items'=> $products]);
    }

    // 上傳商品
    public function create()
    {

    }

    // 更新商品
    public function update()
    {

    }
}
