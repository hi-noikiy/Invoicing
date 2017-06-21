<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>进销存</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('css/demo/nifty-demo.min.css')}}" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->
    <link href="{{asset('plugins/morris-js/morris.min.css')}}" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="{{asset('plugins/magic-check/css/magic-check.min.css')}}" rel="stylesheet">


    <link href="{{asset('layui/css/layui.css')}}" rel="stylesheet" media="all">

    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('plugins/pace/pace.min.js')}}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset('js/nifty.min.js')}}"></script>


    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{asset('js/demo/nifty-demo.min.js')}}"></script>


    <!--Morris.js [ OPTIONAL ]-->
{{--<script src="plugins/morris-js/morris.min.js')}}'"></script>--}}
{{--<script src="plugins/morris-js/raphael-js/raphael.min.js"></script>--}}


<!--Sparkline [ OPTIONAL ]-->
    <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>


    <!--Specify page [ SAMPLE ]-->
    {{--<script src="js/demo/dashboard.js"></script>--}}

    <script src="{{asset('layui/layui.js')}}" charset="utf-8"></script>
    <!--=================================================



    </head>

    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img src="{{asset('img/logo.png')}}" alt="Nifty Logo" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">进销存</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">

            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">welcome</h1>

                <!--Searchbox-->
                <div class="searchbox">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
                            </span>
                    </div>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                @section('body')
                @show


            </div>
            <!--===================================================-->
            <!--End page content-->


        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


        <!--ASIDE-->
        <!--===================================================-->
        <!--===================================================-->
        <!--END ASIDE-->


        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">

                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->


                            <ul id="mainnav-menu" class="list-group">

                                <!--Menu list item-->
                                <li class="active-link">
                                    <a href="{{url('goodslist')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>商品管理</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>
                                <li class="list-header">订单管理</li>
                                <!--Menu list item-->
                                <li class="">
                                    <a href="{{url('orderin')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>商品入库</strong>
											</span>
                                    </a>
                                </li>
                                <!--Menu list item-->
                                <li class="">
                                    <a href="{{url('orderout')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>商品售出</strong>
											</span>
                                    </a>
                                </li>
                                <!--Menu list item-->
                                <li class="">
                                    <a href="{{url('orderlist')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>销售列表</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>
                                <li class="list-header">财务管理</li>
                                <!--Menu list item-->
                                <li class="">
                                    <a href="{{url('capitalconfig')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>设置资产</strong>
											</span>
                                    </a>
                                </li>
                                <!--Menu list item-->
                                <li class="">
                                    <a href="{{url('situation')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>营业状况</strong>
											</span>
                                    </a>
                                </li>

                            </ul>

                            <!--================================-->
                            <!--End widget-->

                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>


    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft">&#0169; 2016 Your Company</p>


    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->


</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

@section('script')
@show
</body>
</html>
