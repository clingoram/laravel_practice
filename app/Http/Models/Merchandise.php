<?php
// 模型(model)就是可以對資料庫操作的orm(Object Relational Mapping = 物件關聯對映)
// 在這裏面寫sql，但又不像以前那種寫法，會變得更簡潔，防止sql injection
// Merchandise(處理 商品) 對照資料表 merchandises
namespace App;

use Illuminate\Database\Eloquent\Model;

// 創建model時得有對照的表
class Merchandise extends Model
{
    //
    protected $table = 'mechandises';

    protected $fillable = [
        'name','price','image_path','amount'
    ];
    
    // public function shopcarts(){
    //     return $this->hasMany(shopcart::class);
    // }

}
