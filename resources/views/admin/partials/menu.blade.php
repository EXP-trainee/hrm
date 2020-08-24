@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>

{{-- @can("roles.view,create,edit,delete") --}}

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users Information</span>
    </a>
</li>

{{-- @endcan --}}

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.teams') ? 'active' : '' }}" href="{{ route(ADMIN . '.teams.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Teams</span>
    </a>
</li>
