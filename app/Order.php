<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['goods_id', 'number', 'prices', 'type', 'remarks'];
}
