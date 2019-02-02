<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img src="" alt="">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{$user->name}}</span>
                        <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        <li><a class="dropdown-item" href="{{route('profile.index')}}">Profile</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{isActiveRoute('dashboard')}}">
                <a href="{{'dashboard'}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{isActiveRoute('users*')}}">
                <a href="{{route('users.index')}}"><i class="fa fa-th-large"></i> <span
                        class="nav-label">User</span></a>
            </li>
            @if (hash_equals(env('APP_ENV'), 'local')) {
            <li class="{{isActiveRoute('sample*')}}">
                <a href="{{route('sample.page')}}"><i class="fa fa-th-large"></i> <span
                        class="nav-label">Sample Page</span></a>
            </li>
            @endif
        </ul>

    </div>
</nav>