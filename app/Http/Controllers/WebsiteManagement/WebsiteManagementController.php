<?php

// Controllers to get data from Model
// 網站設定

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 引入對應的model
use App\Http\Models\Websitemanagement;
// DB
use Illuminate\Support\Facades\DB;

class WebsiteManagementController extends Controller
{
    public function index()
    {
        // $site_management = WebsiteManagement::all();
        
        // 引導到管理頁面 
        return view('Admin.site_management');
    }

    // 更新/新增
    // 是否可開放user註冊(switch value)
    public function store(Request $request)
    {
        // to get input switch value
    //    $switch_value = $request->input('switch_value');
    //    return $switch_value;

        // 如果有value這值，取得ON
        // if($request->has('value')){
        //     $switch_value = $request->input('switch_value');
        // }else{
        //     $switch_value = 'off';
        // }
        // return $switch_value;

        $switch_value = WebsiteManagement::create([
            'website_status'=> $request->switch_value
        ]);

        return $switch_value;

    }


}
