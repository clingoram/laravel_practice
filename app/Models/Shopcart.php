<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    protected $table = 'shopcarts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $guarded = ['id'];

    // public function merchandises(){
    //     return $this->belongsTo(Merchandise::class);
    // }
}
