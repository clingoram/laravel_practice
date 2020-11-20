<!-- 購物車 -->
@extends('layouts.app')
@section('content')
    <div class="container">
        <h6>購物車</h6>

        @if(isset($shopcartdata) AND count($shopcartdata) > 1)
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">商品名稱</th>
                <th scope="col">單項價格</th>
                <th scope="col">數量</th>
              </tr>
            </thead>

            <tbody>
                @foreach($shopcartdata as $key)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $key->merchandise_id  }}</td>
                        <td>$ {{ $key->price }}</td>
                        <td>{{ $key->total_purchase_item }}</td>
                    </tr>
                <p>總價: {{ $key->total_price }}</p>
                @endforeach
            </tbody>

        </table>
        @else
            <p>購物車還沒有東西喔</p>
        @endif

    </div>
@endsection
