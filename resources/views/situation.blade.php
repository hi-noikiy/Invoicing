@extends('layouts.master')
@section('body')
    <form>
        <div class="layui-form-pane" style="margin-top: 15px;">
            <div class="layui-form-item">
                <label class="layui-form-label">范围选择</label>
                <div class="layui-input-inline">
                    <input class="layui-input" placeholder="开始日" id="start_time" name="start_time"
                           value="{{$start_time=='2000-00-00 00:00:00'?'':$start_time}}">
                </div>
                <div class="layui-input-inline">
                    <input class="layui-input" placeholder="截止日" id="end_time" name="end_time"
                           value="{{$end_time=='2099-01-01 23:59:59'?'':$end_time}}">
                </div>
                <div class="layui-input-inline">
                    <button class="btn btn-info" style="line-height: 22px;">搜索</button>
                </div>
            </div>
        </div>
    </form>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">营业状况</h3>

        </div>

        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body">
            <div class="pad-btm form-inline">
            </div>
            <div class="table-responsive">
                <button class="btn btn-success">订单总销售额:{{$pricesSum}}</button>
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
                            <th>时间</th>
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
                                <td>{{date('Y-m-d',strtotime($order['created_at']))}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">暂时没有添加商品</div>
                @endif
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->

    </div>


@stop
@section('script')
    <script>
        layui.use('laydate', function () {
            var laydate = layui.laydate;
            var start = {
                min: '2000-00-00 00:00:00'
                , max: '2099-01-01 23:59:59'
                , istoday: false
                , choose: function (datas) {
                    end.min = datas; //开始日选好后，重置结束日的最小日期
                    end.start = datas //将结束日的初始值设定为开始日
                }
            };

            var end = {
                min: '2000-00-00 00:00:00'
                , max: '2099-06-16 23:59:59'
                , istoday: false
                , choose: function (datas) {
                    start.max = datas; //结束日选好后，重置开始日的最大日期
                }
            };
            $('#start_time').click(function () {
                start.elem = this;
                laydate(start);
            });
            $('#end_time').click(function () {
                end.elem = this;
                laydate(end);
            });

        });
    </script>
@stop