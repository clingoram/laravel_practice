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

            $data = $this->validate($request,[
                'price' => 'required',
                'number' => 'required',
                'merchandise_id' => 'required'
            ]);
            dd($data);die();
            $now = new DateTime();

            // insert data into table
            $insert_data = DB::table('shopcarts')->insert([
                'price'=> $data['number'],
                'total_purchase_item'=> $data['price'],
                'total_price' => $data['number'] * $data['price'],
                'merchandise_id'=> $data['merchandise_id'],
                'created_at' => $now
            ]);

            // return redirect('/')->with('success','add');
            return view('member.shop_cart');
            
        }else{
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
        //
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
