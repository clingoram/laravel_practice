<?php
// 網站設定
namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteManagementController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
}
