<nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
    <div class="container-fluid">


        <!-- Brand -->
        <a class="navbar-brand" href="index-2.html">
            <img src="{{ asset('template/assets/img/logo.svg') }}" class="navbar-brand-img 
      mx-auto" alt="...">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">


            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                        <i class="fe fe-home"></i> Dashboards
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata') ? 'active' : '' }}" href="{{ '/biodata' }}">
                        <i class="fe fe-file"></i> Biodata
                    </a>

                </li>
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('get-data') ? 'active' : '' }}" href="{{ '/get-data' }}">
                            <i class="fe fe-file"></i> Data Biodata
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{ '/profile' }}">
                            <i class="fe fe-user"></i> Manajemen Profile
                        </a>

                    </li>
                @endif
            </ul>



        </div> <!-- / .navbar-collapse -->

    </div>
</nav>
