<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
    @yield('link')
    @yield('style')
</head>

<body>
    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
                <img src="/global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
                        data-toggle="dropdown">
                        <img src="/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2"
                            height="34" alt="">
                        <span>Victoria</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                        <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                                class="badge badge-pill bg-blue ml-auto">58</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-content">
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>

            <div class="sidebar-content">
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="/global_assets/images/placeholders/placeholder.jpg" width="38"
                                        height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Victoria Baker</div>
                                <div class="font-size-xs opacity-50">
                                    <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.menu')

            </div>

        </div>

        <div class="content-wrapper">
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        @yield('page-title')
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            @yield('breadcrumb')
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>

            <div class="content">
                @yield('content')
            </div>

            <div class="navbar navbar-expand-lg navbar-light">
                @include('layouts.footer')
            </div>
        </div>
    </div>
</body>
@yield('js')
@yield('jquery')
</html>
