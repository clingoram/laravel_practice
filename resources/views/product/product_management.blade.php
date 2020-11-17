{{-- 產品管理頁面(上傳、刪除、更新) --}}
@extends('layouts.app')
@section('content')
<div class="container">

    <h1>新增商品</h1>

    {{-- <div class="col-sm-9"> --}}
        
        {!! Form::open(['action' => 'MerchandiseController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
        <div class="row">
            <div class="col-4">
                {{ Form::label('product_name','商品名') }}
            </div>
            <div class="col-6">
                {{ Form::text('product_name','',['class' => 'form-control','placeholder' => '商品名稱']) }}
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                {{ Form::label('image','上傳商品圖片') }}
            </div>
            <div class="col-6">
                {{ Form::file('image') }}
            </div>
            <div class="col-2"></div>
        </div>
        <br>
    
       <div class="row">
            <div class="col-4">
                {{ Form::label('price','商品價錢') }}
            </div>
            <div class="col-6">
                {{ Form::number('price','', [ 'class' => 'form-control','min' => 1]) }}
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                {{ Form::label('product_number','商品數量') }}
            </div>
            <div class="col-6">
                {{ Form::number('product_number','', [ 'class' => 'form-control','min' => 1,'max'=>1000]) }}
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
        <br>
    {{-- </div> --}}
</div>
@endsection