<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['goods_id', 'number', 'prices', 'type', 'remarks'];

    public function goods()
    {
        return $this->belongsTo('App\Goods', 'goods_id', 'id');
    }
}
