<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href={{asset("css/font-face.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/font-awesome-4.7/css/font-awesome.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/font-awesome-5/css/fontawesome-all.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/mdi-font/css/material-design-iconic-font.min.css")}} rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap CSS-->
    <link href={{asset("vendor/bootstrap-4.1/bootstrap.min.css")}} rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href={{asset("vendor/animsition/animsition.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/wow/animate.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/css-hamburgers/hamburgers.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/slick/slick.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/select2/select2.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/perfect-scrollbar/perfect-scrollbar.css")}} rel="stylesheet" media="all">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/icon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/icon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/icon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/icon/site.webmanifest")}}">

    <!-- Main CSS-->
    <link href={{asset("css/theme.css")}} rel="stylesheet" media="all">
    <link rel="stylesheet" href={{asset("css/exam.css")}}>
    @yield('style')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                <a href="{{route("dashboard")}}" style="display: block;margin-left: auto;margin-right: auto;width: 70px;">
                    <img src={{asset("site/imgs/logoH.svg")}} alt="logo of webiste"/>
                </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="{{(request()->segment(1) == 'admin') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{route("dashboard")}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-user') ? 'active' : '' }}">
                            <a href="{{route("manage-user.index")}}">
                                <i class="fas fa-users"></i>Manage Users</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-category') ? 'active' : '' }}">
                            <a href="{{route("manage-category.index")}}">
                                <i class="fas fa-table"></i>Manage Categories</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-exam') ? 'active' : '' }}">
                            <a href="{{route("manage-exam.index")}}">
                                <i class="far fa-check-square"></i>Manage Exams</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-question') ? 'active' : '' }}">
                            <a href="{{route("manage-question.index")}}">
                               <i class="fas fa-question-circle"></i>Manage Questions</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-result') ? 'active' : '' }}">
                            <a href="{{route("manage-result.index")}}">
                                <i class="fas fa-poll"></i>Manage Results</a>
                        </li>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route("dashboard")}}" style="display: block;margin-left: auto;margin-right: auto;width: 70px;">
                    <img src={{asset("site/imgs/logoH.svg")}} alt="logo of webiste"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{(request()->segment(1) == 'admin') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{route("dashboard")}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-user') ? 'active' : '' }}">
                            <a href="{{route("manage-user.index")}}">
                                <i class="fas fa-users"></i>Manage Users</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-category') ? 'active' : '' }}">
                            <a href="{{route("manage-category.index")}}">
                                <i class="fas fa-table"></i>Manage Categories</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-exam') ? 'active' : '' }}">
                            <a href="{{route("manage-exam.index")}}">
                                <i class="far fa-check-square"></i>Manage Exams</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-question') ? 'active' : '' }}">
                            <a href="{{route("manage-question.index")}}">
                               <i class="fas fa-question-circle"></i>Manage Questions</a>
                        </li>
                        <li class="{{(request()->segment(1) == 'manage-result') ? 'active' : '' }}">
                            <a href="{{route("manage-result.index")}}">
                                <i class="fas fa-poll"></i>Manage Results</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
<!-- END MENU SIDEBAR-->
<!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap justify-content-end">
                            {{-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> --}}
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src={{asset("user_images/".Auth::user()->image)}} alt="Admin image" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix" style="cursor: auto">
                                                <div class="image">
                                                    <a>
                                                        <img src={{asset("user_images/".Auth::user()->image)}} alt="Admin image" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a>{{Auth::user()->name}}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                               <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<!-- END HEADER DESKTOP-->
