<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    //
    protected $fillable = [
        'name','price'
    ];
}
