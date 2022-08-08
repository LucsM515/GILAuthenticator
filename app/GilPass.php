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
}
