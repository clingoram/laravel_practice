{{-- 產品管理頁面(上傳、刪除、更新) --}}
@extends('layouts.app')
@section('content')
<div class="container">

    <h1>新增商品</h1>

    <div class="col-sm-9">
        
        <div class="row">
            <div class="col-4">
                <h6>商品名稱</h6>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <h6>上傳商品圖片</h6>
            </div>
            <div class="col-6">
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <h6>商品價錢</h6>
            </div>
            <div class="col-6">
                <input type="number" class="form-control" min ="1">
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <h6>商品數量</h6>
            </div>
            <div class="col-6">
                <input type="number" class="form-control" min ="1" max= "1000">
            </div>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                <h6>商品說明</h6>
            </div>
            <div class="col-6">
                <textarea id="product_description" name="description" rows="4" cols="52"></textarea>
            </div>
            <div class="col-2">
        </div>
        <br>

        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <button type="button" class="btn btn-primary" id="submit">SAVE</button>
            </div>
        </div>

    </div>
</div>
@endsection