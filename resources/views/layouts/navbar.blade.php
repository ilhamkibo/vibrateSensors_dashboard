<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <div class="mt-2 px-2">@yield('header-title')</div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <button class="btn text-info" type="submit"><a href="/login">
                    <i class="fas fa-sign-in-alt mr-1"></i>
                    Sign In
                </a>
            </button>
        </li>
    </ul>
</nav>