
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Ahmed Gad">
    <link rel="icon" href="../../favicon.ico">

    <title>DevelopeMan - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap-rtl.css') !!}
    {!! Html::style('http://getbootstrap.com/examples/dashboard/dashboard.css') !!}
    {!! Html::style('font/css/font-awesome.min.css') !!}
    {!! Html::style('css/custom.css') !!}
    {!! Html::script('js/jquery.min.js') !!}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="margin-top:-51px" dir="rtl">
  <nav class="navbar navbar-default navbar-fixed" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand hidden-lg hidden-md hidden-sm">Develope Man</span>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">{!! Auth::admin()->get()->name !!} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <li><a href="/auth/logout">تسجيل الخروج</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav  hidden-xs">
                    <a class="navbar-brand" href="javascript:void(0)">Develope Man</a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <br>
        <br>
        <div class="container-fulid">
            <div class="col-lg-2"></div>
            <div class="col-lg-10 main">
               
            @yield('content')


            </div>

            <div class="col-lg-2 hidden-md hidden-sm hidden-xs sidebar">
                <ul class="nav" id="topmenu">
                    <?php
                       $pre = explode(',',Auth::admin()->get()->pre);
                    ?>
                    <!-- if(in_array('admin',$pre)) -->

                    <li class="topmenu-dashboard {{ Request::is('admin') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin">
                            <i class="fa fa-home fa-white fa-lg"></i>
                            <span class="margin5">الرئيسية</span>
                        </a>
                    </li>

                    <li class="topmenu-dashboard {{ Request::is('admin/settings*') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin/settings">
                            <i class="fa fa-cogs fa-white fa-lg"></i>
                            <span class="margin5">الإعدادات</span>
                        </a>
                    </li>

                    <li class="topmenu-dashboard {{ Request::is('admin/users*') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin/users">
                            <i class="fa fa-users fa-white fa-lg"></i>
                            <span class="margin5">الأعضاء</span>
                        </a>
                    </li>
                    <li class="topmenu-dashboard {{ Request::is('admin/cats*') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin/cats">
                            <i class="fa fa-bars fa-white fa-lg"></i>
                            <span class="margin5">الأقسام</span>
                        </a>
                    </li>

                    <li class="topmenu-dashboard {{ Request::is('admin/articles*') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin/articles">
                            <i class="fa fa-file-text-o fa-white fa-lg"></i>
                            <span class="margin5">المقالات</span>
                        </a>
                    </li>
                    <li class="topmenu-dashboard {{ Request::is('admin/pages*') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin/pages">
                            <i class="fa fa-file fa-white fa-lg"></i>
                            <span class="margin5">نظام الصفحات</span>
                        </a>
                    </li>
                    
                    <li class="topmenu-dashboard {{ Request::is('admin/subscribe*') ? 'active' : '' }}">
                        <a href="{{ url('/') }}/admin/subscribe">
                            <i class="fa fa-envelope fa-white fa-lg"></i>
                            <span class="margin5">القائمة البريدية</span>
                        </a>
                    </li>
                    

                    <!-- <li class="topmenu-reports">
                        <a href="">
                            <i class="fa fa-bar-chart fa-lg"></i>
                            <span class="margin5">التقارير</span>
                        </a>
                    </li> -->

                    <li class="topmenu-forms hide">
                        <a href="">
                            <i class="icon-dashboard icon-white icon-large"></i>
                            <span class="margin5">النماذج</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('ckeditor/ckeditor.js') !!}
    
  </body>
</html>
