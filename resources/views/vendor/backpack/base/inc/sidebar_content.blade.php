<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>
{{-- @if(backpack_user()->can('view users')) --}}
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-group"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('user') }}">
                <i class="nav-icon fa fa-user"></i> <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('role') }}">
                <i class="nav-icon fa fa-group"></i> <span>Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('permission') }}">
                <i class="nav-icon fa fa-key"></i> <span>Permisos</span>
            </a>
        </li>
    </ul>
</li>
<!-- Files manager -->
<li class=nav-item>
    <a class=nav-link href="{{ backpack_url('elfinder') }}">
        <i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span>
    </a>
</li>
{{-- @endif --}}
<!-- Places -->
{{-- @if(backpack_user()->can('view places')) --}}
    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('place') }}'>
            <i class="nav-icon fas fa-location-arrow"></i> Establecimientos
        </a>
    </li>
{{-- @endif --}}
<!-- Promotions -->
{{-- @if(backpack_user()->can('view promotions')) --}}
    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('promotion') }}'>
            <i class="nav-icon fas fa-ad"></i> Promociones
        </a>
    </li>
{{-- @endif --}}
