<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 對應model
// use App\Merchandise;

// DB
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// resources
use App\Http\Resources\PageResource;

class PageController extends Controller
{
    // 首頁
    public function index()
    {
        $products = DB::table('merchandises')->get();

        // $collection = PageResource::collection($products);
        // return view('site.index',['items'=> $collection]);

        return view('site.index',['items'=> $products]);

        // return $products;

        // return PageResource::collection($products);

    }
}
