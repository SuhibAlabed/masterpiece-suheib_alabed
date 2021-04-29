<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="Assests/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600italic,900">
    <link rel="stylesheet" href={{asset("Assests/css/bootstrap.css")}}>
    <link rel="stylesheet" href={{asset("Assests/css/fonts.css")}}>
    <link rel="stylesheet" href={{asset("Assests/css/style.css")}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!--[if lt IE 10]>
    <div-->
    <!--        style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">-->
    <!--        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img-->
    <!--            src="Assests/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"-->
    <!--            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>-->
    <!--    </div>-->
    <script src={{asset("Assests/js/html5shiv.min.js")}}></script>

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
<!-- Page-->
<div class="page">
    <!-- Page Header-->
    <header class="page-head">
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false"
                 data-md-stick-up-offset="199px" data-lg-stick-up-offset="199px" data-stick-up="true"
                 data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true"
                 data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
                 data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-middle-panel">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-outer-panel">
                                <span class="bg-white"></span></button>
                            <!-- RD Navbar Brand--><a class="rd-navbar-brand " href="#">
                                <!--                  <img src="images/logo-default-432x98.png" alt="" width="216" height="49"/>-->
                                <h3 style="color:#fff">TRU
                                    <mark style="color:#FFAB17">NK</mark>
                                </h3>
                            </a>
                        </div>
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span>
                            </div>
                            <div class="rd-navbar-aside-content">
                                <ul class="block-wrap-list">
                                    <li class="block-wrap">
                                        <div
                                            class="unit flex-column flex-md-row justify-content-center align-items-center unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon icon-circle-sm icon-sm-variant-1 icon-primary-filled icon-white mdi mdi-map-marker"></span>
                                            </div>
                                            <div class="unit-body">
                                                <address class="contact-info "><a href="#" class="text-white"><span>2319 Wasfi Al-Tal Street, Khalda,</span><br><span>Amman, Jordan</span></a>
                                                </address>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="block-wrap">
                                        <div
                                            class="unit flex-column flex-md-row justify-content-center align-items-center unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class=" icon icon-circle-sm icon-sm-variant-1 icon-primary-filled icon-white fa-clock-o"></span>
                                            </div>
                                            <div class="unit-body">
                                                <address class="contact-info"><span>Mon-Fri: 9:00am-6:00pm</span><span>Sat-Sun: 10:00am-5:00pm</span>
                                                </address>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="block-wrap">
                                        <div
                                            class="unit flex-column flex-md-row justify-content-center align-items-center unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon icon-circle-sm icon-sm-variant-1 icon-primary-filled icon-white mdi mdi-phone"></span>
                                            </div>
                                            <div class="unit-body">
                                                <address class="contact-info"><span>+962 798388572</span><span><a
                                                            href="tel:#" class="text-white">+962 778870791</a></span>
                                                </address>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-outer-panel">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item {{request()->getRequestUri()== '/' ? 'active' : ''}}"><a
                                        class="rd-nav-link " href="/">Home</a>
                                </li>
                                <li class="rd-nav-item {{request()->getRequestUri()== '/services' ? 'active' : ''}}"><a
                                        class="rd-nav-link " href="/services">Services</a>
                                <li class="rd-nav-item {{request()->getRequestUri()== '/about_us' ? 'active' : ''}}"><a
                                        class="rd-nav-link " href="/about_us">About us</a>
                                </li>

                                <li class="rd-nav-item {{request()->getRequestUri()== '/blog' ? 'active' : ''}}"><a
                                        class="rd-nav-link" href="/blog">Blog</a>
                                    {{--                                    <ul class="rd-menu rd-navbar-dropdown">--}}
                                    {{--                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog--}}
                                    {{--                                                post</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                </li>
                                <li class="rd-nav-item {{request()->getRequestUri()== '/contact_us' ? 'active' : ''}}">
                                    <a class="rd-nav-link" href="/contact_us">Contacts</a>
                                </li>
                            </ul>
                            @guest()
                                <ul class="rd-navbar-nav ">
                                    <li class="justify-content-center align-items-center">
                                    <li class="rd-nav-item mr-5 {{request()->getRequestUri()== '/join_our_team' ? 'active' : ''}}">
                                        {{--                                    <a class="rd-nav-link" href="/contact_us">SIGN UP</a>--}}

                                        @if (Route::has('register'))
                                            <button type="button"
                                                    style="background: none; color:white; font-weight: bold; border:none; outline: none"
                                                    id="RegisterBtn"
                                                    class="rd-nav-link" data-bs-toggle="modal"
                                                    data-bs-target="#NameModal" data-bs-whatever="@getbootstrap">
                                                Register
                                            </button>
                                        @endif

                                    </li>
                                    <li class="rd-nav-item pl-3 pr-3 m-0 {{request()->getRequestUri()== '/sign_in' ? 'active' : ''}}">
                                        <button type="button"
                                                {{--                                                style="background: none; color:white; font-weight: bold; border:none; outline: none"--}}
                                                class=" btn btn-primary p-2 pl-3 pr-3 m-0 signInBtn"
                                                data-bs-toggle="modal"
                                                data-bs-target="#LoginModal" data-bs-whatever="@getbootstrap">
                                            Sign in
                                        </button>
                                    </li>
                                    </li>

                                </ul>
                            @endguest
                            @auth
                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'user')
                                    <ul class="rd-navbar-nav ">
                                        <li class="justify-content-center align-items-center">
                                        <li class="rd-nav-item  pl-3 pr-3 m-0">
                                            <b>Hello, {{Auth::user()->first_name}}</b>
                                        </li>
                                        <li class="rd-nav-item mr-5 {{request()->getRequestUri()== '/join_our_team' ? 'active' : ''}}">


                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        <li class="rd-nav-item btn btn-primary p-2 pl-3 pr-3 m-0 {{request()->getRequestUri()== '/Profile' ? 'active' : ''}}">
                                            <a
                                                class="rd-nav-link" href="{{"user/".\Illuminate\Support\Facades\Auth::user()->first_name }}">Profile</a>
                                        </li>
                                        </li>

                                    </ul>

                                @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                                    <ul class="rd-navbar-nav ">
                                        <li class="justify-content-center align-items-center">
                                        <li class="rd-nav-item  pl-3 pr-3 m-0">
                                            <b>Hello, {{Auth::user()->first_name}}</b>
                                        </li>
                                        <li class="rd-nav-item mr-5 {{request()->getRequestUri()== '/Logout' ? 'active' : ''}}">

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        <li class="rd-nav-item btn btn-primary p-2 pl-3 pr-3 m-0 {{request()->getRequestUri()== '/admin' ? 'active' : ''}}">
                                            <a
                                                class="rd-nav-link" href="/admin">Dashboard</a>
                                        </li>
                                        </li>

                                    </ul>
                                @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'worker')
                                    <ul class="rd-navbar-nav ">
                                        <li class="justify-content-center align-items-center">
                                        <li class="rd-nav-item  pl-3 pr-3 m-0">
                                            <b>Hello, {{Auth::user()->first_name}}</b>
                                        </li>
                                        <li class="rd-nav-item mr-5 {{request()->getRequestUri()== '/Logout' ? 'active' : ''}}">

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        <li class="rd-nav-item btn btn-primary p-2 pl-3 pr-3 m-0 {{request()->getRequestUri()== '/admin' ? 'active' : ''}}">
                                            <a
                                                class="rd-nav-link" href="{{"../user/".\Illuminate\Support\Facades\Auth::user()->first_name }}">Profile</a>
                                        </li>

                                        </li>
                                    </ul>
                                @endif

                            @endauth

                        <!-- Search Bar -->

                            {{--                            <div class="rd-navbar-search">--}}
                            {{--                                <!-- RD Search-->--}}
                            {{--                                <form class="rd-search" action="search-results.html" method="GET"--}}
                            {{--                                      data-search-live="rd-search-results-live">--}}
                            {{--                                    <div class="form-wrap">--}}
                            {{--                                        <label class="form-label" for="rd-search-form-input">Search...</label>--}}
                            {{--                                        <input class="form-input" id="rd-search-form-input" type="text" name="s"--}}
                            {{--                                               autocomplete="off">--}}
                            {{--                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>--}}
                            {{--                                        <button class="rd-navbar-search-submit" type="submit"></button>--}}
                            {{--                                    </div>--}}
                            {{--                                </form>--}}
                            {{--                                <button class="rd-navbar-search-toggle"--}}
                            {{--                                        data-rd-navbar-toggle=".rd-navbar-search"></button>--}}
                            {{--                            </div>--}}
                        </div>

                        @guest()
                            <div class="rd-navbar-top-panel">
                                <div class="rd-navbar-top-panel-inner">
                                    <ul class="list-inline list-inline-xs">
                                        <li><a class="icon icon-xs icon-primary fa-facebook" href="#"></a></li>
                                        {{--                                    <li><a class="icon icon-xs icon-primary fa-twitter" href="#"></a></li>--}}
                                        {{--                                    <li><a class="icon icon-xs icon-primary fa-pinterest-p" href="#"></a></li>--}}
                                        {{--                                    <li><a class="icon icon-xs icon-primary fa-vimeo" href="#"></a></li>--}}
                                        <li><a class="icon icon-xs icon-primary fa-google" href="#"></a></li>
                                        {{--                                    <li><a class="icon icon-xs icon-primary fa-rss" href="#"></a></li>--}}
                                    </ul>

                                    <button id="JoinOurTeamBtn" data-bs-target="#NameModal" data-bs-toggle="modal"
                                            data-bs-dismiss="modal"
                                            style="border-radius: 20em; border:none; outline: none; padding:0.5rem 1.5rem 0.5rem 1.5rem; font-weight: bold">
                                        Join Our Team
                                    </button>
                                    {{--                                <a class="btn btn-xs btn-light" href="appointment.html">free consultation</a>--}}
                                </div>
                            </div>
                        @endguest

                        @auth
                            @if(\Illuminate\Support\Facades\Auth::user()->role == 'user')
                                <div class="rd-navbar-top-panel">
                                    <div class="rd-navbar-top-panel-inner">
                                        <ul class="list-inline list-inline-xs">
                                            <li><a class="icon icon-xs icon-primary fa-facebook" href="#"></a></li>
                                            {{--                                    <li><a class="icon icon-xs icon-primary fa-twitter" href="#"></a></li>--}}
                                            {{--                                    <li><a class="icon icon-xs icon-primary fa-pinterest-p" href="#"></a></li>--}}
                                            {{--                                    <li><a class="icon icon-xs icon-primary fa-vimeo" href="#"></a></li>--}}
                                            <li><a class="icon icon-xs icon-primary fa-google" href="#"></a></li>
                                            {{--                                    <li><a class="icon icon-xs icon-primary fa-rss" href="#"></a></li>--}}
                                        </ul>

                                        <button id="JoinOurTeamBtn" data-bs-target="#NameModal" data-bs-toggle="modal"
                                                data-bs-dismiss="modal"
                                                style="border-radius: 20em; border:none; outline: none; padding:0.5rem 1.5rem 0.5rem 1.5rem; font-weight: bold">
                                            Join Our Team
                                        </button>
                                        {{--                                <a class="btn btn-xs btn-light" href="appointment.html">free consultation</a>--}}
                                    </div>
                                </div>
                            @endif
                        @endauth

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Page Content-->

    {{-- Start Register Modal--}}

    {{-- First & Last Name Modal --}}
    <div class="modal fade" id="NameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ffab17">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Register</h5>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="recipient-name" class="col-form-label">First Name <sup
                                    style="color: #ff0000">*</sup></label>
                            <input type="text" id="first_name"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="first_name form-control"
                                   id="recipient-name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="recipient-name" class="col-form-label">Last Name <sup
                                    style="color: #ff0000">*</sup></label>
                            <input type="text" id="last_name"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="last_name form-control"
                                   id="recipient-name">
                        </div>
                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="margin:0; padding:0.5rem 1rem 0.5rem 1rem; font-size:1em"
                            class="rd-nav-link btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close
                    </button>

                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link Next-1" data-bs-target="#PhoneModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal" id="Next-1">Next
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- First & Last Name Modal --}}

    {{-- Phone Number Modal --}}
    <div class="modal fade" id="PhoneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ffab17">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Register</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Phone Number <sup style="color: #ff0000">*</sup></label>
                            <input type="number" id="mobile_number" placeholder="ex: 0777777777"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="mobile_number form-control"
                                   id="recipient-name">
                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="margin:0; padding:0.5rem 1rem 0.5rem 1rem; font-size:1em"
                            class="rd-nav-link btn btn-danger" data-bs-target="#NameModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Back
                    </button>

                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link Next-2" data-bs-target="#CityModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal" id="Next-2">Next
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Phone Number Modal --}}

    {{-- City Modal --}}
    <div class="modal fade" id="CityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ffab17">
                    <h4 class="modal-title text-white" id="dark-header-modalLabel">Register</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="recipient-name" class="col-form-label">Select City: <sup
                                style="color: #ff0000">*</sup></label>
                        <select id="location" class="form-select " aria-label="fas fa-angle-down">
                            <option value="1">Amman</option>
                            <option value="2">Irbid</option>
                            <option value="3">Zarqa</option>
                            <option value="4">Ar Ramtha</option>
                            <option value="5">Aqaba</option>
                            <option value="6">Mafraq</option>
                            <option value="7">Madaba</option>
                        </select>
                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="margin:0; padding:0.5rem 1rem 0.5rem 1rem; font-size:1em"
                            class="rd-nav-link btn btn-danger" data-bs-target="#PhoneModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Back
                    </button>

                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link Next-3" data-bs-target="#EmailModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal" id="Next-3">Next
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- City Modal --}}


    {{-- Email Modal --}}
    <div class="modal fade" id="EmailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ffab17">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Register</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Email Address <sup
                                    style="color: #ff0000">*</sup></label>
                            <input type="email" name="email_address" id="email_address"
                                   placeholder="ex: suheib@gmail.com"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="email_address form-control"
                                   id="recipient-name" required>
                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="margin:0; padding:0.5rem 1rem 0.5rem 1rem; font-size:1em"
                            class="rd-nav-link btn btn-danger" data-bs-target="#CityModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Back
                    </button>

                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link Next-4" data-bs-target="#PasswordModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal" id="Next-4">Next
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Email Modal --}}

    {{-- Password Modal --}}
    <div class="modal fade" id="PasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ffab17">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Register</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Password<sup
                                    style="color: #ff0000">*</sup></label>
                            <input type="password" name="password" id="password"
                                   placeholder="*****"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="password form-control"
                                   id="recipient-name" required>
                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="margin:0; padding:0.5rem 1rem 0.5rem 1rem; font-size:1em"
                            class="rd-nav-link btn btn-danger" data-bs-target="#EmailModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Back
                    </button>

                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link submit" data-bs-dismiss="modal" aria-label="Close"
                            id="submit">Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Password Modal --}}

    {{-- Comfirm  Modal --}}
    <div class="modal fade confirmModal" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #8bc24a">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Success</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Congratulations, your account has been
                                successfully created. <sup
                                    style="color: #ff0000">*</sup></label>

                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link" data-bs-dismiss="modal" aria-label="Close"
                    >Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Confirm Modal --}}

    {{-- Faild Registeration  Modal --}}
    <div class="modal fade warning" id="warning" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ff0000">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Registration Unsuccessful!</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Please go back and double check your
                                information and make sure that is is valid <sup
                                    style="color: #ff0000">*</sup></label>

                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link" data-bs-dismiss="modal" aria-label="Close"
                    >Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Faild Registeration Modal --}}

    {{-- End Register Modal--}}




    {{-- Start Login Modal--}}
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ffab17">
                    <h5 class="modal-title text-white" id="exampleModalLabel">SIGN IN</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Email Address <sup
                                    style="color: #ff0000">*</sup></label>
                            <input type="email" name="email" id="emailLogin"
                                   placeholder="ex: suheib@gmail.com"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="email form-control"
                                   required>
                        </div>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Password <sup
                                    style="color: #ff0000">*</sup></label>
                            <input type="password" name="password" id="passwordLogin"
                                   placeholder="*****"
                                   style="padding:1.5rem; border-radius: 10rem; font-size: medium"
                                   class="password form-control"
                                   required>
                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="margin:0; padding:0.5rem 1rem 0.5rem 1rem; font-size:1em"
                            class="rd-nav-link btn" id="RegisterBtn" data-bs-target="#NameModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Register
                    </button>

                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link signin" data-bs-dismiss="modal" aria-label="Close" id="signin">Sign in
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{-- Faild Login  Modal --}}
    <div class="modal fade warningLoginModal" id="warningLoginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header" style="background: #ff0000">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Login failed!</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 ">
                            <label for="recipient-name" class="col-form-label">Sorry, your email and/or password are
                                incorrect. Please try again <sup
                                    style="color: #ff0000">*</sup></label>

                        </div>

                    </form>
                    {{csrf_field()}}
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-between">
                    <button type="button"
                            style="font-size:1.1em;background: #ff0000; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link" data-bs-dismiss="modal" aria-label="Close"
                    >Close
                    </button>
                    <button type="button"
                            style="font-size:1.1em;background: #ffab17; color:#fff; font-weight: bold; padding:0.5rem 1rem 0.5rem 1rem; border-radius: 5rem; border:none; outline: none"
                            class="rd-nav-link" data-bs-target="#LoginModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal"
                    >Try Again
                    </button>
                </div>
            </div>
        </div>
    </div>
{{-- Faild Login  Modal --}}

{{-- End Login Modal--}}



@yield('content')

<!-- Page Footer-->
    <footer class="page-foot bg-gray-dark">
        <div class="container text-center text-md-left">
            <div class="row justify-content-md-center">
                <div class="col-md-10 col-lg-12">
                    <div class="row justify-content-lg-between">
                        <div class="col-md-6 col-lg-3 wrap-lg-justify-vertical">
                            <!-- Logo-->
                            <div class="logo"><a class="logo-link" href="index.html">
                                    <h3 style="color:#fff">TRU
                                        <mark style="color:#FFAB17">NK</mark>
                                    </h3>
                                </a></div>
                            <div class="offset-top-30 offset-sm-top-65">
                                <ul class="list-inline list-inline-xs">
                                    <li><a class="icon icon-xs fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xs fa-pinterest-p" href="#"></a></li>
                                    <li><a class="icon icon-xs fa-vimeo" href="#"></a></li>
                                    <li><a class="icon icon-xs fa-google" href="#"></a></li>
                                    <li><a class="icon icon-xs fa-rss" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 offset-top-55 offset-md-top-0">
                            <div class="max-width-300">
                                <h5 class="h5-variant-1">Newsletter</h5>
                                <hr>
                                <p class="offset-top-22">Keep up with our always upcoming news & updates. Enter your
                                    e-mail and subscribe to our newsletter.</p>
                                <!-- RD Mailform-->
                                <form class="rd-mailform rd-mailform-inline rd-mailform-inline-sm offset-top-10"
                                      data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                      action="bat/rd-mailform.php">
                                    <div class="form-wrap">
                                        <label class="form-label" for="footer-subscribe-email">Enter your
                                            e-mail...</label>
                                        <input class="form-input" id="footer-subscribe-email" type="email" name="email"
                                               data-constraints="@Email @Required">
                                    </div>
                                    <button class="btn btn-xs btn-light btn-no-shadow" type="submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-5 offset-top-55 offset-md-top-0">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="h5-variant-1">Contact Us</h5>
                                    <hr>
                                </div>
                                <div class="col-xs-5 col-md-6 col-lg-12 col-xl-6 offset-top-18 text-xs-left">
                                    <address class="contact-info">
                                        <div class="unit flex-column flex-xs-row unit-spacing-xs">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                    class="icon icon-xs icon-white mdi mdi-phone"></span></div>
                                            <div class="unit-body"><span><a href="tel:#">+962 798388572</a></span><span><a
                                                        href="tel:#">+962 778870791</a></span></div>
                                        </div>
                                        <div
                                            class="unit flex-column flex-xs-row align-items-center unit-spacing-xs offset-top-22 offset-xs-top-18">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                    class="icon icon-xs icon-white mdi mdi-email-outline"></span></div>
                                            <div class="unit-body"><a href="mailto:#">suhib.alabed@gmail.com</a></div>
                                        </div>
                                    </address>
                                </div>
                                <div
                                    class="col-xs-7 col-md-6 col-lg-12 col-xl-6 offset-top-22 offset-xs-top-18 inset-xl-left-9 text-xs-left">
                                    <address class="contact-info">
                                        <div class="unit flex-column flex-xs-row unit-spacing-xs">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                    class="icon icon-xs icon-white mdi mdi-map-marker"></span></div>
                                            <div class="unit-body"><a class="nowrap" href="#">319 Wasfi Al-Tal Street,
                                                    Khalda, <br>Amman, Jordan</a></div>
                                        </div>
                                        <div class="unit flex-column flex-xs-row unit-spacing-xs offset-top-22">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                    class="icon icon-xs icon-white mdi fa-clock-o"></span></div>
                                            <div class="unit-body"><span>Mon-Fri: 9:00am-6:00pm</span><span>Sat-Sun: 10:00am-5:00pm</span>
                                            </div>
                                        </div>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-top-55 offset-sm-top-60 offset-lg-top-88">
                        <div class="col-sm-12">
                            <p class="rights">&#169;&nbsp;<span class="copyright-year"></span>&nbsp;All Rights Reserved&nbsp;<a
                                    href="privacy-policy.html">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
{{--<div class="preloader">--}}

{{--    <div class="preloader-body" style="color: #FFAB17">--}}
{{--        <div class="preloader-loading">--}}
{{--            <p class="text-dark">Loading</p><span style="background: #171717 "></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="snackbars" id="form-output-global"></div>

<script>

    $(document).ready(function () {
        let firstName = document.querySelector(".first_name");
        let lastName = document.querySelector(".last_name");
        let mobileNumber = document.querySelector(".mobile_number");
        let location = $('#location').find(":selected").text();
        let emailAddress = document.querySelector(".email_address");
        let password = document.querySelector(".password");

        let button = document.querySelector(".submit");
        let Next1 = document.querySelector(".Next-1");
        let Next2 = document.querySelector(".Next-2");
        let Next3 = document.querySelector(".Next-3");
        let Next4 = document.querySelector(".Next-4");

        button.disabled = true;
        Next1.disabled = true;
        Next2.disabled = true;
        Next3.disabled = true
        Next4.disabled = true

        firstName.addEventListener("change", stateHandle);
        lastName.addEventListener("change", stateHandle);
        mobileNumber.addEventListener("change", stateHandle);
        emailAddress.addEventListener("change", stateHandle);
        password.addEventListener("change", stateHandle);


        function stateHandle() {
            if (firstName.value === "" || lastName.value === "") {
                Next1.disabled = true;
            } else {
                Next1.disabled = false;
            }

            if (mobileNumber.value === "") {
                Next2.disabled = true;
            } else {
                Next2.disabled = false;
            }

            if (location.value === "") {
                Next3.disabled = true;
            } else {
                Next3.disabled = false;
            }

            if (emailAddress.value === "") {
                Next4.disabled = true;
            } else {
                Next4.disabled = false;
            }

            if (password.value === "") {
                button.disabled = true;
            } else {
                button.disabled = false;
            }
        }

        $('#JoinOurTeamBtn, #RegisterBtn').click(function () {
            if (this.id == 'JoinOurTeamBtn') {
                $('.submit').click(function (event) {
                    event.preventDefault();
                    let firstName = $('#first_name').val();
                    let lastName = $('#last_name').val();
                    let mobileNumber = $('#mobile_number').val();
                    let location = $('#location').find(":selected").text();
                    let emailAddress = $('#email_address').val();
                    let password = $('#password').val();

                    // console.log(password+" "+firstName + " " + lastName + " " + mobileNumber + " "  + location + " " + emailAddress);
                    if (password != '' && firstName != '' && lastName != '' && mobileNumber != '' && emailAddress != '' && location != '') {
                        $.post('register', {
                            'first_name': firstName,
                            'last_name': lastName,
                            'mobile_number': mobileNumber,
                            'location': location,
                            'email_address': emailAddress,
                            'password': password,
                            'role': "worker",
                            '_token': $('input[name=_token]').val()
                        })
                                .done(function (data) {
                                window.location.reload(true);
                                // $('.confirmModal').modal('show');
                                sessionStorage.setItem("user_id", data);
                                console.log(data);
                            })

                            .fail(function (xhr, textStatus, errorThrown) {
                                // alert("Something wrong");
                                $('.warning').modal('show');
                            });

                    }
                });
            } else if (this.id == 'RegisterBtn') {
                $('.submit').click(function (event) {
                    event.preventDefault();
                    let firstName = $('#first_name').val();
                    let lastName = $('#last_name').val();
                    let mobileNumber = $('#mobile_number').val();
                    let location = $('#location').find(":selected").text();
                    let emailAddress = $('#email_address').val();
                    let password = $('#password').val();

                    // console.log(password+" "+firstName + " " + lastName + " " + mobileNumber + " "  + location + " " + emailAddress);
                    if (password != '' && firstName != '' && lastName != '' && mobileNumber != '' && emailAddress != '' && location != '') {
                        $.post('register', {
                            'first_name': firstName,
                            'last_name': lastName,
                            'mobile_number': mobileNumber,
                            'location': location,
                            'email_address': emailAddress,
                            'password': password,
                            'role': "user",
                            '_token': $('input[name=_token]').val()
                        })
                                .done(function (data) {
                                window.location.reload(true);
                                // $('.confirmModal').modal('show');
                                sessionStorage.setItem("user_id", data);
                                console.log(data);
                            })
                            .fail(function (xhr, textStatus, errorThrown) {
                                $('.warning').modal('show');
                            });

                    }
                });
            }
        });


        $('.signin').click(function (event) {
            event.preventDefault();
            let email = $('#emailLogin').val();
            let password = $('#passwordLogin').val();


            // console.log(password+" "+firstName + " " + lastName + " " + mobileNumber + " "  + location + " " + emailAddress);
            if (email !== '' && password !== '') {
                $.post('login', {
                    'email_address': email,
                    'password': password,
                    '_token': $('input[name=_token]').val()
                }).done(function (data) {
                    window.location.reload(true);

                    $('.confirmLoginModal').modal('show');
                    sessionStorage.setItem("user_id", data)
                    console.log(data)
                })
                    .fail(function (xhr, textStatus, errorThrown) {
                        // alert("Something wrong");
                        $('.warningLoginModal').modal('show');
                    });

            }
        });
    });
</script>
<!-- Javascript-->

<script src={{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js")}}
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
<script src={{asset("Assests/js/core.min.js")}}></script>
<script src={{asset("Assests//js/script.js")}}></script>
</body>
</html>
