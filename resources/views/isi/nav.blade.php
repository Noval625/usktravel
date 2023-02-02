<header class="top-area" style="background-color: black">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="index.html">
                            Wooz<span>Tour</span>
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10">
                    <div class="main-menu">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="smooth-menu"><a href="{{ route('dashboard') }}">home</a></li>
                                <li class="smooth-menu"><a href="{{ route('destiuse.index') }}">Order The Destinate</a></li>
                                <li class="smooth-menu"><a href="#">Cek My Order</a></li>
                                <li>
                                    <a href="{{ route('profile.edit') }}"  class="book-btn">Profile
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                                <button class="btn btn-danger text-danger ms-3 mt-1" >
                                                     <span>Logout</span>
                                                </button>
                                    </form>
                                </li>
                                <!--/.project-btn-->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header>
