<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <!-- All-->
            <li class="nav-link">
                <a href="{{route('add-blog')}}" class="btn btn-info">Add Blog</a>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="pro-user-name ml-1">
                        {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <h2 class="text-white mt-2 align-middle"> BLOG APP</h2>
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <h2 class="text-white mt-2 align-middle"> BLOG APP</h2>
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
                    <h2 class="text-white mt-2 align-middle"> BLOG APP</h2>
                </span>
                <span class="logo-lg">
                    <h2 class="text-white mt-2 align-middle"> BLOG APP</h2>
                </span>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>