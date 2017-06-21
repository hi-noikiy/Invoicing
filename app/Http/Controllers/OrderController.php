<?php

namespace App\Http\Controllers;

use App\Capital;
use App\Goods;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data['type'] = ['入库', '售出', '退货'];
        $data['orders'] = $orders;
        return view('orderlist', $data);
    }

    public function orderCancel($id)
    {
        $order = Order::find($id);
        $order->type = 2;
        $order->save();
        $goods = Goods::find($order->goods_id);
        $goods->inventory = $goods->inventory + $order->number;
        $goods->save();
        $capital = Capital::find(1);
        $capital->now_money = $capital->now_money - ($order->number * $order->prices);
        $capital->save();
        return redirect('orderlist');
    }

    public function situation(Request $request)
    {
        $pricesSum = 0;
        $start_time = $request->start_time ? $request->start_time : '2000-00-00 00:00:00';
        $end_time = $request->end_time ? $request->end_time : '2099-01-01 23:59:59';
        $orders = Order::with('goods')->whereDate('created_at', '>=', $start_time)->whereDate('created_at', '<=', $end_time)->get()->toArray();
        foreach ($orders as $order) {
            $pricesSum += $order['prices'] * $order['number'];
        }
        //计算盈利
        $data['orders'] = $orders;
        $data['pricesSum'] = $pricesSum;
        $data['start_time'] = $start_time;
        $data['end_time'] = $end_time;
        return view('situation', $data);
    }
}
