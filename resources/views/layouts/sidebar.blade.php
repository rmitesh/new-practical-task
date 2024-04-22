<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
    <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="{{ config('app.name', 'Laravel') }} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info d-flex">
                <a href="javascript: void(0);" class="d-block">{{ Auth::user()->name }}</a>
                <a title="Sign Out" class="ml-2 d-inline-block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ is_active('dashboard') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @role(\App\Models\User::ROLE_ADMIN)
                    <li class="nav-item">
                        <a href="{{ route('forms.index') }}" class="nav-link {{ is_active(['forms.index']) }}">
                            <i class="fas fa-user-cog nav-icon"></i>
                            <p>Manage Forms</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-user-cog nav-icon"></i>
                            <p>System User Types</p>
                        </a>
                    </li>
                @endrole
            </ul>
        </nav>
    </div>
</aside>
