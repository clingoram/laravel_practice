<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 創建model時得有對照的表
class Products extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'image_url_path', 'amounts', 'status'
    ];

    // public function shopcarts(){
    //     return $this->hasMany(shopcart::class);
    // }

}
