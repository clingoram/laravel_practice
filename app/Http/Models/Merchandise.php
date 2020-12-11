<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// 創建model時得有對照的表
class Merchandise extends Model
{
    //
    protected $table = 'merchandises';

    protected $fillable = [
        'name','price','image_path','amount'
    ];
    
    // public function shopcarts(){
    //     return $this->hasMany(shopcart::class);
    // }

}
