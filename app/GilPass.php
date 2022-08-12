<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GilPass extends Model
{
    use SoftDeletes;
    protected $table = "gil_pass";
    protected $fillable = ["password"];
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','id','updated_at', 'deleted_at'];
}
