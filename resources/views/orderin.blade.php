@extends('layouts.master')
@section('body')
    <div class="panel">
        <form class="form-horizontal" action="{{url('/orderincreate')}}" method="post">
            <!--Modal body-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <!--Input Size-->
                        <!--===================================================-->

                        {{csrf_field()}}
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">选择商品</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="goods_id">
                                        @if(count($goods)>0)
                                            @foreach($goods as $good)
                                                <option value="{{$good['id']}}">{{$good['name']}}</option>
                                            @endforeach
                                        @else
                                            <option value="0">暂时没有商品</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">数量</label>
                                <div class="col-sm-6">
                                    <input name="number" type="text" placeholder="数量"
                                           class="form-control input-sm" id="demo-is-inputsmall">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">进价</label>
                                <div class="col-sm-6">
                                    <input name="prices" type="text" placeholder="进价"
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
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-mint" type="submit">入库</button>
                                <button class="btn btn-warning" type="reset">重置</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>


@stop