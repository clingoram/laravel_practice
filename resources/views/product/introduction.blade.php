{{-- 商品說明 --}}
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 640px;">
            <div class="row no-gutters">

                @if(isset($product->image_path) AND $product->image_path != 'no_image.jpeg')
                    <div class="col-md-4">
                        <img style="width:200px" src="/storage/images/{{$product->image_path}}">
                    </div>
                 @endif

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name}}</h5>
                        <p class="card-text">售價: ${{ $product->price }}</p>
                        <p class="card-text">商品數量: {{ $product->amount }}</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <p class="card-text">欲購買數量:

                            {!! Form::open(['action' => 'ShopcartController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
                                {{ Form::selectRange('number', 1, $product->amount) }}
                                {{ Form::button('放進購物車',['class' => 'btn btn-primary']) }}
                            {!! Form::close() !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection