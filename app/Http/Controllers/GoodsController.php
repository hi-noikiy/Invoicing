<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function goodsList()
    {
        return view('goodslist');
    }
}
