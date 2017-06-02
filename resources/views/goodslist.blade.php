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
                    <tr>
                        <td><a class="btn-link" href="#"> Order #53431</a></td>
                        <td>Steve N. Horton</td>
                        <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 22, 2014</span></td>
                        <td>$45.00</td>
                        <td>
                            <div class="label label-table label-success">Paid</div>
                        </td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary">编辑</button>
                            <button class="btn btn-danger">删除</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="btn-link" href="#"> Order #53431</a></td>
                        <td>Steve N. Horton</td>
                        <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 22, 2014</span></td>
                        <td>$45.00</td>
                        <td>
                            <div class="label label-table label-success">Paid</div>
                        </td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary">编辑</button>
                            <button class="btn btn-danger">删除</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="btn-link" href="#"> Order #53431</a></td>
                        <td>Steve N. Horton</td>
                        <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 22, 2014</span></td>
                        <td>$45.00</td>
                        <td>
                            <div class="label label-table label-success">Paid</div>
                        </td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary">编辑</button>
                            <button class="btn btn-danger">删除</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
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

                <!--Modal body-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel">


                                <!--Input Size-->
                                <!--===================================================-->
                                <form class="form-horizontal">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">商品编号</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="商品编号" class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">名称</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="名称" class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">型号</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="型号" class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">库存</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="库存" class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">单价</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="单价" class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">备注</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="备注" class="form-control input-sm" id="demo-is-inputsmall">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--===================================================-->
                                <!--End Input Size-->


                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                    <button class="btn btn-primary">添加</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Default Bootstrap Modal-->
@stop