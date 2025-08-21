<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Property </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Welcome Admin!</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('property.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('property.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Manage Properties
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('property.create') }}" class="nav-link {{ request()->routeIs('property.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Property</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('property.index') }}" class="nav-link {{ request()->routeIs('property.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Property</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('enquiries.index') }}" class="nav-link {{ request()->routeIs('enquiries.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Manage Enquiries
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('how-it-works.index') }}" class="nav-link {{ request()->routeIs('how-it-works.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            How It Works
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.banner') }}" class="nav-link {{ request()->routeIs('admin.banner*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Homepage Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cities.index') }}" class="nav-link {{ request()->routeIs('cities.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-city"></i>
                        <p>
                            Manage Cities
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('developers.index') }}" class="nav-link {{ request()->routeIs('developers.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Developers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('investment-opportunities.index') }}" class="nav-link {{ request()->routeIs('investment-opportunities.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Investment Opportunities
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('settings.index') }}" class="nav-link {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Website Settings
                        </p>
                    </a>
                </li>
                
                @if(app()->environment('local'))
                <li class="nav-item">
                    <a href="{{ route('artisan.index') }}" class="nav-link {{ request()->routeIs('artisan.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-terminal"></i>
                        <p>
                            Artisan Commands
                            <span class="badge badge-warning right">DEV</span>
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>