<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$pageTitle}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--link rel="shortcut icon" href="vendors/pageloader/images/loader4.GIF" type="image/x-icon"-->
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700&subset=vietnamese' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--LOADING STYLESHEET FOR PAGE-->
    @yield('custom-style')
    <!--Loading style vendors-->
    <link rel="stylesheet" href="{{ url('vendors/animate.css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/jquery-pace/pace.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/iCheck/skins/all.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/jquery-notific8/jquery.notific8.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <!--Loading style-->
    <link rel="stylesheet" href="{{ url('css/themes/style1/zvinhtq.css') }}" class="default-style">
    <link rel="stylesheet" href="{{ url('css/style-responsive.css') }}">

    <script type="text/javascript" src="{{ url('js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
    <!--loading bootstrap js-->
    <script type="text/javascript" src="{{ url('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/respond.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/metisMenu/jquery.metisMenu.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/slimScroll/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-cookie/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/iCheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/iCheck/custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-notific8/jquery.notific8.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-highcharts/highcharts.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.menu.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-pace/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/holder/holder.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/responsive-tabs/responsive-tabs.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-news-ticker/jquery.newsTicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/moment/moment.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/bgt/delete-hacking-scripts.js') }}"></script>
    <script type="text/javascript" src="{{ url("js/jquery.maskMoney.js") }}"></script>
    <!--CORE JAVASCRIPT-->
    <script type="text/javascript" src="{{ url('js/main.js') }}"></script>
    <!--LOADING SCRIPTS FOR PAGE-->
    <script type="text/javascript">
        function time() {
            var today = new Date();
            var weekday=new Array(7);
            weekday[0]="Chủ nhật";
            weekday[1]="Thứ hai";
            weekday[2]="Thứ ba";
            weekday[3]="Thứ tư";
            weekday[4]="Thứ năm";
            weekday[5]="Thứ sáu";
            weekday[6]="Thứ bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            m=checkTime(m);
            s=checkTime(s);
            nowTime = h+":"+m+":"+s;
            if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;

            tmp='<span class="date"> '+today+' | '+nowTime+'</span>';

            document.getElementById("clock").innerHTML=tmp;

            clocktime=setTimeout("time()","1000","JavaScript");
            function checkTime(i)
            {
                if(i<10){
                    i="0" + i;
                }
                return i;
            }
        }
    </script>
    @yield('custom-script')
</head>
<body class="header-fixed" onload="time()">
<div>
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </button>
                <a id="logo" href="{{url('')}}" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">LIFESOFT</span><span style="display: none" class="logo-text-icon"><i class="fa fa-home"></i></span></a> </div>
            <div class="topbar-main"> <a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul  class="nav navbar navbar-top-links navbar-right mbn">
                    <!--li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">
                        <img src="{{url('/images/avatar/default-user.png')}}" alt="" class="img-responsive img-circle"/>&nbsp;
                        <span class="hidden-xs"></span>&nbsp;
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="{{url('user/cp')}}"><i class="fa fa-key"></i>Đổi mật khẩu</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
                        </ul>
                    </li-->
                </ul>
            </div>
        </nav>
    </div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <!--li id="navluutru"><a href="{{url('')}}"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Kê khai giá dịch vụ lưu trú</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('dvlt/sotc')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại sở tài chính</span></a> </li>
                            <li><a href="{{url('dvlt/dn')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại doanh nghiệp</span></a> </li>
                        </ul>
                    </li>
                    <li id="navluutru"><a href="{{url('')}}"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Giá cước vận tải</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="#"><i class="fa fa-desktop fa-fw"></i><span class="submenu-title">Vận tải xe khách</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level collapse" style="height: 0px;">
                                    <li><a href="{{url('dvxk/sotc')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại sở tài chính</span></a> </li>
                                    <li><a href="{{url('dvxk/dn')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại doanh nghiệp</span></a> </li>
                                </ul>
                            </li>

                            <li class=""><a href="#"><i class="fa fa-desktop fa-fw"></i><span class="submenu-title">Vận tải xe buýt</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level collapse" style="height: 0px;">
                                    <li><a href="{{url('dvxb/sotc')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại sở tài chính</span></a> </li>
                                    <li><a href="{{url('dvxb/dn')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại doanh nghiệp</span></a> </li>
                                </ul>
                            </li>

                            <li class=""><a href="#"><i class="fa fa-desktop fa-fw"></i><span class="submenu-title">Vận tải xe taxi</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level collapse" style="height: 0px;">
                                    <li><a href="{{url('dvxtx/sotc')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại sở tài chính</span></a> </li>
                                    <li><a href="{{url('dvxtx/dn')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại doanh nghiệp</span></a> </li>
                                </ul>
                            </li>

                            <li class=""><a href="#"><i class="fa fa-desktop fa-fw"></i><span class="submenu-title">Vận tải chở hàng</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level collapse" style="height: 0px;">
                                    <li><a href="{{url('dvch/sotc')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại sở tài chính</span></a> </li>
                                    <li><a href="{{url('dvch/dn')}}"><i class="fa fa-th-list"></i><span class="submenu-title">Chức năng tại doanh nghiệp</span></a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li!-->
                    <li> <a href="{{url('don-vi-quan-ly')}}"> <i class="fa fa-laptop fa-fw"></i> <span class="menu-title">Đơn vị quản lý</span> </a> </li>
                    <li> <a href="{{url('don-vi-ke-khai')}}"> <i class="fa fa-laptop fa-fw"></i> <span class="menu-title">Đơn vị kê khai</span> </a> </li>

                    </li>
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <ol class="breadcrumb page-breadcrumb pull-left mln">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="{{url('')}}">Trang chủ</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">{{$pageTitle}}</li>
                </ol>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li class="btn btn-info btn-xs mbs">
                        <b><div id="clock"></div></b>
                    </li>

                </ol>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->
            @yield('content')
            <!--END CONTENT-->
        </div>
        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">2016 © LifeSoft - Tiện ích hơn - Hiệu quả hơn</div>
        </div>
        <!--END FOOTER--><!--END PAGE WRAPPER-->
    </div>
</div>
</body>
</html>