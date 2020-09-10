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

{{--@canany("users.view,users.create,users.edit,users.delete")--}}

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="fas fa-user"></i>
        </span>
        <span class="title">Users Information</span>
    </a>
</li>


<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.teams') ? 'active' : '' }}" href="{{ route(ADMIN . '.teams.index') }}">
        <span class="icon-holder">
            <i class="fas fa-users"></i>
        </span>
        <span class="title">Teams</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link " href="#">
        <span class="icon-holder">
            <i class="fas fa-hand-holding-usd"></i>
        </span>
        <span class="title">Salary</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link " href="#">
        <span class="icon-holder">
            <i class="fas fa-coins"></i>
        </span>
        <span class="title">Bominus</span>
    </a>
</li>

{{--@endcan--}}

<li class="nav-item">
    <a class="sidebar-link " href="#">
        <span class="icon-holder">
            <i class="far fa-calendar-check"></i>
        </span>
        <span class="title">Workdays</span>
    </a>
</li>
