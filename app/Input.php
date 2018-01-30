<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    //允許使用的資料庫
    protected $table = 'inputs';
    
    //允許批量賦值的欄位名稱
    protected $fillable = ['input'];
}
