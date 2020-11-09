<?php

// Controllers to get data from Model
// 網站設定

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
// 對應model
// use App\Http\Models\Merchandise;

class WebsiteManagementController extends Controller
{
    // 首頁
    public function index(){
        $products = DB::table('merchandises')->get();

        return view('site.index',['items'=> $products]);
    }

}