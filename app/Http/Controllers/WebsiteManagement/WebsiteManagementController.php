<?php

// Controllers to get data from Model
// 網站設定

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 引入對應的model
use App\Websitemanagement;

class WebsiteManagementController extends Controller
{
    // 引導到管理頁面
    public function index()
    {
        return view('sitemanagement.site_management');
    }

    // 更新
    public function update(Request $request)
    {
        // to get input switch value
    //    $switch_value = $request->input('value');
    //    return $switch_value;

        // 如果有value這值，取得ON
        if($request->has('value')){
            $switch_value = $request->input('value');
        }else{
            $switch_value = 'off';
        }
        return $switch_value;
    }


}
