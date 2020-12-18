<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 對應model
// use App\Merchandise;

// DB
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // 首頁
    public function index()
    {
        $products = DB::table('merchandises')->get();

        // return view('site.index',['items'=> $products]);
        // return PageResource::collection($products);
        // return $products;

    }
}
