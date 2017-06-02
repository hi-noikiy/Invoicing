<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function goodsList()
    {
        $goods = Goods::all()->toArray();
        $data['goods'] = $goods;
        return view('goodslist',$data);
    }

    public function goodsCreate(Request $request)
    {
        $data = $request->all();
        Goods::create($data);
        return redirect('goodslist');
    }

    public function goodsDel($id)
    {
        $good = Goods::find($id);
        $good->delete();
        return redirect('goodslist');
    }

    public function goodsEdit($id)
    {
        $goods = Goods::find($id)->toArray();
        $data['goods'] = $goods;
        return view('goodsedit',$data);
    }

    public function goodsUpdate(Request $request)
    {
        $data = $request->all();
        $goods = Goods::find($data['id']);
        $goods->update($data);
        return redirect('goodslist');
    }
}
