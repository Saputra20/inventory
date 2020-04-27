<!DOCTYPE html>
<html lang="en">

<head>
    @include('error.header')
</head>

<body>
    <div class="navbar navbar-expand-md navbar-dark bg-slate fixed-top">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
                <img src="/global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav"> </ul>

            <span class="navbar-text ml-md-3">
                <span class="badge badge-mark border-orange-300 mr-2"></span>
                Morning, {{ Session::get('user_name') }}
            </span>

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    {{-- <a href="{{ route('logout') }}" class="navbar-nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="icon-switch2"></i>
                        <span class="d-md-none ml-2">Logout</span>
                    </a> --}}

                    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}
                </li>
            </ul>
        </div>
    </div>

    <div class="page-content">
        <div class="content-wrapper">
            <div class="content d-flex justify-content-center align-items-center">
                <div class="flex-fill">

                    <div class="text-center mb-3">
                        @yield('error-content')
                    </div>

                    <div class="row">
                        <div class="col-xl-4 offset-xl-4 col-md-8 offset-md-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-block"><i class="icon-home4 mr-2"></i>
                                        Dashboard</a>
                                </div>

                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-light btn-block mt-3 mt-sm-0"><i
                                            class="icon-menu7 mr-2"></i> Advanced search</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2020 MARKET PLACE
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
