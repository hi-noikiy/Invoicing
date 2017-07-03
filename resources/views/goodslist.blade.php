@extends('layouts.master')
@section('body')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">商品列表</h3>
        </div>

        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 table-toolbar-left">
                        <button data-target="#demo-default-modal" data-toggle="modal" class="btn btn-primary"><i
                                    class="demo-pli-add"></i> 添加商品
                        </button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                @if(count($goods)>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>商品编号</th>
                            <th>名称</th>
                            <th>型号</th>
                            <th>库存</th>
                            <th>商品单价</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($goods as $good)
                            <tr>
                                <td><a class="btn-link" href="#">{{$good['number']}}</a></td>
                                <td>{{$good['name']}}</td>
                                <td><span class="text-muted">{{$good['version']}}</span></td>
                                <td>{{$good['inventory']}}</td>
                                <td>
                                    <div class="label label-table label-success">{{$good['prices']}}</div>
                                </td>
                                <td>{{$good['remarks']}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('/goodsedit',$good['id'])}}">编辑</a>
                                    <a class="btn btn-danger" href="{{url('/goodsdel',$good['id'])}}">删除</a>
                                </td>
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
    <!--Default Bootstrap Modal-->
    <!--===================================================-->
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i>
                    </button>
                    <h4 class="modal-title">添加商品</h4>
                </div>
                <form class="form-horizontal" action="{{url('/goodscreate')}}" method="post"
                      onsubmit="return checkIsNull()">
                    <!--Modal body-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <!--Input Size-->
                                    <!--===================================================-->

                                    {{csrf_field()}}
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">商品编号</label>
                                            <div class="col-sm-6">
                                                <input name="number" type="text" placeholder="商品编号"
                                                       class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">名称</label>
                                            <div class="col-sm-6">
                                                <input name="name" type="text" placeholder="名称"
                                                       class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">型号</label>
                                            <div class="col-sm-6">
                                                <input name="version" type="text" placeholder="型号"
                                                       class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">库存</label>
                                            <div class="col-sm-6">
                                                <input name="inventory" type="text" placeholder="库存"
                                                       class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">单价</label>
                                            <div class="col-sm-6">
                                                <input name="prices" type="text" placeholder="单价"
                                                       class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">备注</label>
                                            <div class="col-sm-6">
                                                <input name="remarks" type="text" placeholder="备注"
                                                       class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                    </div>

                                    <!--===================================================-->
                                    <!--End Input Size-->


                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal footer-->
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                        <button class="btn btn-primary" type="submit">添加</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Default Bootstrap Modal-->


@stop
@section('script')
    <script>
        var inputNumber = $('form input').length;
        function checkIsNull() {
            //检查填写的内容是否有空，只有备注允许为空
            for (var i = 1; i < inputNumber - 1; i++) {
                if ($('form input').eq(i).val() == '') {
                    alert($('form input').eq(i).attr('placeholder') + '不能为空！');
                    return false;
                }
            }
        }
    </script>
@stop