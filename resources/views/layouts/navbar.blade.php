<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-teal">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <div class="mt-2 px-2 text-dark">@yield('header-title')</div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger navbar-badge">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" bis_skin_checked="1">
                <span class="dropdown-item dropdown-header">2 Notifications</span>
                <div class="dropdown-divider" bis_skin_checked="1"></div>
                <div href="#" class="dropdown-item">
                    Device 1 is missing!
                    <span class="float-right text-muted text-sm">17:00:32</span>
                </div>
                <div class="dropdown-divider" bis_skin_checked="1"></div>
                <div href="#" class="dropdown-item">
                    Device 4 is missing!
                    <span class="float-right text-muted text-sm">17:00:32</span>
                </div>
                <div class="dropdown-divider" bis_skin_checked="1"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        @endauth
        <li class="nav-item">
            @auth
            <form action="/logout" method="post" class="action">
                @csrf
                <button class="btn" type="submit">
                    <i class="fas fa-sign-out-alt mr-1"></i>
                    Sign Out
                </button>
            </form>
            @else
            <button class="btn" type="submit"><a href="/login" class="text-dark">
                    <i class="fas fa-sign-in-alt mr-1"></i>
                    Sign In
                </a>
            </button>

            @endauth
        </li>
    </ul>
</nav>

@push('scripts')

@endpush