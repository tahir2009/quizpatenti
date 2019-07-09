<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
        <div class="logo">
            <a href="dashboard.html" class="simple-text logo-normal">
                Quiz Patente
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="@yield('dashboard_nav')">
                    <a class="nav-link" href="dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="@yield('create_school_nav')">
                    <a class="nav-link" href="{{route('school_account.create') }}">
                        <i class="material-icons">person</i>
                        <p>Create school</p>
                    </a>
                </li>
                <li class="@yield('school_accounts_nav')">
                    <a class="nav-link" href="tables.html">
                        <i class="material-icons">content_paste</i>
                        <p>School Accounts</p>
                    </a>
                </li>
                <li class="@yield('features_nav')">
                    <a class="nav-link" href="{{route('feature.index') }}">
                        <i class="material-icons">notifications</i>
                        <p>Features</p>*&
                    </a>
                </li>
                <li class="@yield('packages_nav')">
                    <a class="nav-link" href="packages.html">
                        <i class="material-icons">bubble_chart</i>
                        <p>packages</p>
                    </a>
                </li>
                <li class="@yield('licenses_nav')">
                    <a class="nav-link" href="create-licenses.html">
                        <i class="material-icons">language</i>
                        <p>licenses</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>