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
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.user-infors') ? 'active' : '' }}" href="{{ route(ADMIN . '.user-infors.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users Information</span>
    </a>
</li>
