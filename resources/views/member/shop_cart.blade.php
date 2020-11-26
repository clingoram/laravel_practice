<!-- 購物車 -->
@extends('layouts.app')
@section('content')
    <div class="container">
        <h6 class="title-canter">購物車</h6>

        @if(isset($shopcartdata) AND count($shopcartdata) >= 1)
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
                    @php($i = 1)
                    @foreach($shopcartdata as $key)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $key->name  }}</td>
                            <td>$ {{ $key->price }}</td>
                            <td>{{ $key->total_purchase_item }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="lead title-canter">你的購物車還沒有東西喔!!!</p>
                </div>
            </div>
        @endif

    </div>
@endsection
