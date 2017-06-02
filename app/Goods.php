<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public $fillable = ['number', 'name', 'version', 'inventory', 'prices', 'remarks'];
}
