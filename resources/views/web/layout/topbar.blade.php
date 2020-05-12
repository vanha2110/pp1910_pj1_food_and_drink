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
                                <li><a href="#slider">Home</a></li>
                                <li><a href="#abouts">Menu</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#portfolio">Delivery</a></li>
                                <!-- <li><a href="#" class="booking">Table Booking</a></li> -->
                            </ul>
                                
                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Đăng nhập</button></a></li>
                                @else
                                    <li class="btn btn-primary dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    Đăng Xuất
                                                </a>

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