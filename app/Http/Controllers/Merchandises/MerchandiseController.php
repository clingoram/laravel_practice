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
        // $products = Merchandises::get();//DB::table('merchandises')->get();

        // return view('site.index',['items'=> $products]);

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

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 管理員上傳商品頁面
    public function create()
    {
        // $user = Auth::user();

        // if($user->role == 'A'){
        //     // if admin is login
        //     $direct_page = 'site.product_management';
        // }else{
        //     // to login page
        //     $direct_page = 'auth.login';
        // }

        return view('site.product_management');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // save
    public function store(Request $request)
    {

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 更新商品
    public function update(Request $request, $id)
    {

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
