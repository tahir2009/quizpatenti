<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>pannel</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=" {{ asset(env('ASSET_URL') . 'theme/css/date.css') }}"/>
    <!-- CSS Files -->
    <link href="http://ruknalfalahllc.com/library/material-dashboard.min.css" rel="stylesheet"/>
    <link href=" {{ asset(env('ASSET_URL') . 'theme/css/datatables.css') }}" rel="stylesheet"/>
    <link href=" {{ asset(env('ASSET_URL') . 'theme/css/material-dashboard-rtl.css') }}" rel="stylesheet"/>
    <link href="{{ asset(env('ASSET_URL') . 'theme/css/choosen.css') }}" rel="stylesheet"/>
    @yield('style')
    <link href="http://ruknalfalahllc.com/library/style.css" rel="stylesheet"/>
    <link href="http://ruknalfalahllc.com/library/responsive.css" rel="stylesheet"/>

</head>
<body>
@component('layouts.admin.sidebar')
@endcomponent

<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <!-- Navbar -->
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="" id="navbarDropdownProfile" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

    </header>
    @yield('content')
    <div class="clearfix"></div>
</div>
<script src="http://ruknalfalahllc.com/library/jquery.js"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/popper.js') }}"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="http://ruknalfalahllc.com/library/material-dashboard.min.js"></script>
<script src="http://ruknalfalahllc.com/library/chartist.min.js"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/chosen.js') }}"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/jquery.geocomplete.js') }}"></script>
<script src="http://ruknalfalahllc.com/library/datatables.js"></script>
<script src="http://ruknalfalahllc.com/library/material-design.js"></script>
<script src="http://ruknalfalahllc.com/library/date2.js"></script>
<script src='http://ruknalfalahllc.com/library/custom.js'></script>
@yield('script')
</body>
</html>