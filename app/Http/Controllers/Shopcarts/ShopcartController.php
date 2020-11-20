<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 對應model
use App\Merchandise;
use App\Shopcart;
use DateTime;

// DB
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('member.shop_cart',['member'=> $user->id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // check if user is login or not
        if(Auth::check()){
            // if user is login
            $user = Auth::user();

            // 取得目前商品頁的商品id
            $merchandise_data = DB::table('merchandises')->find(20);

            $data = $this->validate($request,[
                'purchase_number' => 'required'
            ]);

            $now = new DateTime();
            
            // insert data into table
            $insert_data = DB::table('shopcarts')->insert([
                // 售價
                'price' => $merchandise_data->price,
                // 欲購買數量
                'total_purchase_item' => $data['purchase_number'],
                // 總價
                'total_price' => $merchandise_data->price * $data['purchase_number'],
                // 商品ID
                'merchandise_id' => $merchandise_data->id,
                'created_at' => $now,
                // 會員ID
                'userid' => $user->id
            ]);
            // var_dump($insert_data);die();

            // return redirect('/')->with('success','add');
            return view('member.shop_cart');
            
        }else {
            // direct to login page
            return view('auth.login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 取得特定會員購物車內的資料
        $member_cartData = DB::table('shopcarts')->where('userid',$id)->get();
        return view('member.shop_cart')->with('shopcartdata',$member_cartData);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
