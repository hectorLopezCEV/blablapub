<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

<!-- Users, Roles, Permissions -->
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('user') }}">
        <i class="nav-icon fa fa-user"></i> <span>Usuarios</span>
    </a>
        
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
