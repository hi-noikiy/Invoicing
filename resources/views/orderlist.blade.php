@extends('layouts.master')
@section('body')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">订单列表</h3>
        </div>

        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body">
            <div class="pad-btm form-inline">
            </div>
            <div class="table-responsive">
                @if(count($orders)>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>订单编号</th>
                            <th>商品名称</th>
                            <th>商品价格</th>
                            <th>售价</th>
                            <th>数量</th>
                            <th>利润/元</th>
                            <th>备注</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td><a class="btn-link" href="#">{{$order['id']}}</a></td>
                                <td>{{$order['goods']['name']}}</td>
                                <td><span class="text-muted">{{$order['goods']['prices']}}</span></td>
                                <td>{{$order['prices']}}</td>
                                <td>
                                    <div class="label label-table label-success">{{$order['number']}}</div>
                                </td>
                                <td>{{($order['prices']-$order['goods']['prices'])*$order['number']}}</td>
                                <td>{{$order['remarks']}}</td>
                                <td>{{$type[$order['type']]}}</td>
                                <td>
                                    @if($order['type'] == 1)
                                        <a class="btn btn-primary" href="{{url('/ordercancel',$order['id'])}}">退货</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">暂时没有订单</div>
                @endif
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->

    </div>


@stop