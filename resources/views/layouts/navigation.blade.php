<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
                <img src="{{ asset('images/brand/laravel.svg') }}" height="20" width="20" alt="laravel">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
                {{ config('app.name', 'Laravel') }}
            </span>
        </a>
    </li>

    <li role="separator" class="dropdown-divider mt-2 mb-3 border-gray-700"></li>

    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->segment(1) == 'users' ? 'active' : '' }}">
        <a href="{{ route('users.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-user-alt fa-fw"></i>
            </span>
            <span class="sidebar-text">{{ __('Users') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->segment(1) == 'barang' ? 'active' : '' }}">
        <a href="{{ route('barang.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-box fa-fw"></i>
            </span>
            <span class="sidebar-text">{{ __('Barang') }}</span>
        </a>
    </li>

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    <div class="sidebar-heading ms-2 text-gray-400">
        Staff
    </div>

    <li class="nav-item {{ request()->segment(1) == 'staff' ? 'active' : '' }}">
        <a href="{{ route('staff.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-user-nurse fa-fw"></i>
            </span>
            <span class="sidebar-text">{{ __('Staff') }}</span>
        </a>
    </li>

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    <div class="sidebar-heading ms-2 text-gray-400">
        Owner
    </div>

    <li class="nav-item {{ request()->segment(1) == 'owner' ? 'active' : '' }}">
        <a href="{{ route('owner.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-user-tie fa-fw"></i>
            </span>
            <span class="sidebar-text">{{ __('Owner') }}</span>
        </a>
    </li>
</ul>
