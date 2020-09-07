<?php

// Model is to get datas from db.
// Model will send datas to Contrllers when get datas from db.
// model要跟DB作互動(存取資料)

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Websitemanagement extends Model
{
    //
    protected $fillable = [
        'website_status','note'
    ];
}
