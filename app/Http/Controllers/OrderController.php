<?php

namespace App\Http\Controllers;

use App\Capital;
use App\Goods;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderIn()
    {
        $goods = Goods::all()->toArray();
        $data['goods'] = $goods;
        return view('orderin', $data);
    }

    public function orderInCreate(Request $request)
    {
        /*
         * 创建入库订单之后需要做的事情
         * 1.给商品加上对应的库存
         * 2.减去对应价格的当前资金
         * */
        $data = $request->all();
        $data['type'] = 0;
        $order = Order::create($data);
        $goods = Goods::find($data['goods_id']);
        $goods->inventory = $goods->inventory + $data['number'];
        $goods->save();
        $capital = Capital::find(1);
        $capital->now_money = $capital->now_money - ($data['number'] * $data['prices']);
        $capital->save();
        return redirect('orderin');
    }

    public function orderOut()
    {
        $goods = Goods::all()->toArray();
        $data['goods'] = $goods;
        return view('orderout', $data);
    }

    public function orderOutCreate(Request $request)
    {
        $data = $request->all();
        $data['type'] = 1;
        $order = Order::create($data);
        $goods = Goods::find($data['goods_id']);
        $goods->inventory = $goods->inventory - $data['number'];
        $goods->save();
        $capital = Capital::find(1);
        $capital->now_money = $capital->now_money + ($data['number'] * $data['prices']);
        $capital->save();
        return redirect('orderin');
    }

    public function orderList()
    {
        $orders = Order::with('goods')->get()->toArray();
        $data['type'] = ['入库','售出','退货'];
        $data['orders'] = $orders;
        return view('orderlist', $data);
    }
}
