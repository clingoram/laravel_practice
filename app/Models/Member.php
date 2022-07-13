<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Members extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];
}
