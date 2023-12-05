<div class="sidebar" data-color="orange">
    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
    <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
            <img src="{{ asset('img/logo-small.png') }}">
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
            {{ trans('panel.site_title') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if (request()->is('admin')) active @endif">
                <a href="{{ route('admin.home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @can('user_management_access')
			<li>
                <a data-toggle="collapse" aria-expanded="true" href="#user_management">
                    <i class="fa-fw fas fa-users"></i>
                    <p>
                        {{ trans('cruds.user_management.title') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="user_management">
                    <ul class="nav">
                        @can('permission_access')
                        <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <a href="{{ route('admin.permissions.index') }}">
                                <i class="fa-fw fas fa-unlock-alt"></i>
                                <p>{{ trans('cruds.permission.title') }}</p>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <a href="{{ route('admin.roles.index') }}">
                                <i class="fa-fw fas fa-briefcase"></i>
                                <p>{{ trans('cruds.role.title') }}</p>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <a href="{{ route('admin.users.index') }}">
                                <i class="fa-fw fas fa-user"></i>
                                <p>{{ trans('cruds.user.title') }}</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
            @endcan
        </ul>
    </div>
</div>
