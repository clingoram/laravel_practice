<?php

// Controllers to get data from Model
// 網站設定

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteManagementController extends Controller
{
    // 首頁
    public function index(){
        return view('site.index');
    }

}