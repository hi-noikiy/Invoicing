@extends('layouts.master')
@section('body')
    <div class="panel">
        <form class="form-horizontal" action="{{url('/goodsupdate')}}" method="post">
            <!--Modal body-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <!--Input Size-->
                            <!--===================================================-->

                            {{csrf_field()}}
                            <input type="hidden" value="{{$goods['id']}}" name="id">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-is-inputsmall">商品编号</label>
                                    <div class="col-sm-6">
                                        <input value="{{$goods['number']}}" name="number" type="text" placeholder="商品编号"
                                               class="form-control input-sm" id="demo-is-inputsmall">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-is-inputsmall">名称</label>
                                    <div class="col-sm-6">
                                        <input value="{{$goods['name']}}" name="name" type="text" placeholder="名称"
                                               class="form-control input-sm" id="demo-is-inputsmall">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-is-inputsmall">型号</label>
                                    <div class="col-sm-6">
                                        <input value="{{$goods['version']}}" name="version" type="text" placeholder="型号"
                                               class="form-control input-sm" id="demo-is-inputsmall">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-is-inputsmall">库存</label>
                                    <div class="col-sm-6">
                                        <input value="{{$goods['inventory']}}" name="inventory" type="text" placeholder="库存"
                                               class="form-control input-sm" id="demo-is-inputsmall">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-is-inputsmall">单价</label>
                                    <div class="col-sm-6">
                                        <input value="{{$goods['prices']}}" name="prices" type="text" placeholder="单价"
                                               class="form-control input-sm" id="demo-is-inputsmall">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-is-inputsmall">备注</label>
                                    <div class="col-sm-6">
                                        <input value="{{$goods['remarks']}}" name="remarks" type="text" placeholder="备注"
                                               class="form-control input-sm" id="demo-is-inputsmall">
                                    </div>
                                </div>
                            </div>

                            <!--===================================================-->
                            <!--End Input Size-->


                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-mint" type="submit">修改</button>
                                    <button class="btn btn-warning" type="reset">重置</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

    </div>


@stop