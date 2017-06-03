@extends('layouts.master')
@section('body')
    <div class="panel">
        <form class="form-horizontal" action="{{url('/capitalupdate')}}" method="post">
            <!--Modal body-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <!--Input Size-->
                        <!--===================================================-->

                        {{csrf_field()}}
                        <input type="hidden" value="{{$capital['id']}}" name="id">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">账户名称</label>
                                <div class="col-sm-6">
                                    <input value="{{$capital['name']}}" name="name" type="text" placeholder="账户名称"
                                           class="form-control input-sm" id="demo-is-inputsmall">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">初始金额</label>
                                <div class="col-sm-6">
                                    <input value="{{$capital['start_money']}}" name="start_money" type="text" placeholder="初始金额"
                                           class="form-control input-sm" id="demo-is-inputsmall">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">当前金额</label>
                                <div class="col-sm-6">
                                    <input value="{{$capital['now_money']}}" name="now_money" type="text" placeholder="当前金额"
                                           class="form-control input-sm" id="demo-is-inputsmall">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">备注</label>
                                <div class="col-sm-6">
                                    <input value="{{$capital['remarks']}}" name="remarks" type="text" placeholder="备注"
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