<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopcart extends Model
{
    public function merchandises(){
        return $this->belongsTo(Merchandise::class);
    }
}
