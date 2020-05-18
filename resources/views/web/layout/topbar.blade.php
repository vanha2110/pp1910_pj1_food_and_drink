<header id="home" class="navbar-fixed-top">

    <!-- End navbar-collapse-->

    <div class="main_menu_bg">
        <div class="container"> 
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- <a class="navbar-brand our_logo" href="#"><img src="template_web/images/logo.png" alt="" /></a> -->
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-left">
                                <li><a href="#slider">TRANG CHỦ</a></li>
                                <li><a href="#abouts">THỰC ĐƠN</a></li>
                                <li><a href="#features">BLOG</a></li>
                                <li><a href="#portfolio">ABOUT</a></li>
                                <!-- <li><a href="#" class="booking">Table Booking</a></li> -->
                            </ul>
                                
                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                @else

                                    <li class="">
                                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                            <span class=" fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                                            <li><a href="javascript:;"> Profile</a></li>
                                            <li><a href="javascipt:void(0);" data-toggle="modal" data-target="#modalChangePass">Change Password</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li>
                                                <a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> LogOut</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>	
</header>