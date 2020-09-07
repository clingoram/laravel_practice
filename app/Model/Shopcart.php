<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    public function merchandises(){
        return $this->belongsTo(Merchandise::class);
    }
}
