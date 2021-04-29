<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()->role != 'admin')
            <script>window.location = "/";</script>
        @endif
    @endauth
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("assets_dashboard/assets/images/favicon.png")}}>
    <title>Trunk Dashboard</title>
    <!-- Custom CSS -->
    <link href={{asset("assets_dashboard/assets/extra-libs/c3/c3.min.css")}} rel="stylesheet">
    <link href={{asset("assets_dashboard/assets/libs/chartist/dist/chartist.min.css")}} rel="stylesheet">
    <link href={{asset("assets_dashboard/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css")}} rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href={{asset("assets_dashboard/dist/css/style.min.css")}} rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <![endif]-->
</head>

<body>
<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
{{--<div class="preloader">--}}
{{--    <div class="lds-ripple">--}}
{{--        <div class="lds-pos"></div>--}}
{{--        <div class="lds-pos"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand m-0 d-flex justify-content-center">
                    <!-- Logo icon -->
                    <a href="/admin-side">
{{--                        <div class="rd-navbar-panel ">--}}

                            <!-- RD Navbar Brand--><a class="rd-navbar-brand " href="/admin-side">
                                <!--                  <img src="images/logo-default-432x98.png" alt="" width="216" height="49"/>-->
                                <h3 style="color:#333; font-weight: bold">TRU
                                    <mark style="color:#FFAB17">NK</mark>
                                </h3>
                            </a>
{{--                        </div>--}}
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <!-- Notification -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                           id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <span><i data-feather="bell" class="svg-icon"></i></span>
                            <span class="badge badge-primary notify-no rounded-circle">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>
                                    <div class="message-center notifications position-relative">
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                           class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <div class="btn btn-danger rounded-circle btn-circle"><i
                                                    data-feather="airplay" class="text-white"></i></div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                           class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                <span
                                                    class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                           class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                <span
                                                    class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                           class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                    class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                        <strong>Check all notifications</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Notification -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="settings" class="svg-icon"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                            <div class="customize-input">
                                <select
                                    class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                    <option selected>EN</option>
                                    <option value="1">AB</option>
                                    <option value="2">AK</option>
                                    <option value="3">BE</option>
                                </select>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
{{--                    <li class="nav-item d-none d-md-block">--}}
{{--                        <a class="nav-link" href="javascript:void(0)">--}}
{{--                            <form>--}}
{{--                                <div class="customize-input">--}}
{{--                                    <input class="form-control custom-shadow custom-radius border-0 bg-white"--}}
{{--                                           type="search" placeholder="Search" aria-label="Search">--}}
{{--                                    <i class="form-control-icon" data-feather="search"></i>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
{{--                            <img src="assets_dashboard/assets/images/users/profile-pic.jpg" alt="user"--}}
{{--                                 class="rounded-circle"--}}
{{--                                 width="40">--}}
                            <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                    class="text-dark">{{Auth::user()->first_name}}</span> <i data-feather="chevron-down"
                                                                          class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="/"><i data-feather="user"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Public Site</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i data-feather="power"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                    Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="/admin-side"
                                                aria-expanded="false"><i data-feather="home"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                    <li class="list-divider"></li>
                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="/admin"
                                                aria-expanded="false"><i data-feather="user-plus"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Add Admin</span></a></li>
                    <li class="list-divider"></li>

                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="/worker"
                                                aria-expanded="false"><i data-feather="shopping-bag"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Manage Workers</span></a></li>
                    <li class="list-divider"></li>

                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="/main-services"
                                                aria-expanded="false"><i data-feather="settings"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Main Services</span></a></li>
                    <li class="list-divider"></li>

                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="/manage-services"
                                                aria-expanded="false"><i data-feather="settings"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Manage Services</span></a></li>
                    <li class="list-divider"></li>

                    <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="/manage-posts"
                                                aria-expanded="false"><i data-feather="file-text"
                                                                         class="feather-icon"></i><span
                                class="hide-menu">Manage Posts</span></a></li>
                    <li class="list-divider"></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src={{asset("assets_dashboard/assets/libs/jquery/dist/jquery.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/libs/popper.js/dist/umd/popper.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/libs/bootstrap/dist/js/bootstrap.min.js")}}></script>
<!-- apps -->
<!-- apps -->
<script src={{asset("assets_dashboard/dist/js/app-style-switcher.js")}}></script>
<script src={{asset("assets_dashboard/dist/js/feather.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}></script>
<script src={{asset("assets_dashboard/dist/js/sidebarmenu.js")}}></script>
<!--Custom JavaScript -->
<script src={{asset("assets_dashboard/dist/js/custom.min.js")}}></script>
<!--This page JavaScript -->
<script src={{asset("assets_dashboard/assets/extra-libs/c3/d3.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/extra-libs/c3/c3.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/libs/chartist/dist/chartist.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js")}}></script>
<script src={{asset("assets_dashboard/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js")}}></script>
<script src={{asset("assets_dashboard/dist/js/pages/dashboards/dashboard1.min.js")}}></script>
</body>

</html>
