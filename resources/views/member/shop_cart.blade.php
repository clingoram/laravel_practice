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
                    <th scope="col">詳細</th>
                </tr>
                </thead>

                <tbody>
                    @php($i = 1)
                    @foreach($shopcartdata as $key)
                    {{-- @php(print_r($shopcartdata)) --}}
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $key->name  }}</td>
                            <td>$ {{ $key->price }}</td>
                            <td>
                                <input type="number" min="1" max="{{ $key->amount }}" value="{{ $key->total_purchase_item }}">
                            </td>
                            <td>
                                {!! Form::open(['action'=>['ShopcartController@destroy',$key->id],'method'=>'POST','class'=>'pull-right']) !!}
                                @csrf
                                {{ Form::hidden('_method','DELETE') }}
                                {{ Form::submit('刪除',['class'=>'btn btn-danger btn-sm']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
            @foreach($shopcartdata as $k)
                <h1>總共: {{ $k->total_price }} 元</h1>
            @endforeach

        @else
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="lead title-canter">你的購物車還沒有東西喔!!!</p>
                </div>
            </div>
        @endif

    </div>
@endsection
