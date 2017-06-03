<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    public $fillable = ['name','start_money','now_money','remarks'];
}
