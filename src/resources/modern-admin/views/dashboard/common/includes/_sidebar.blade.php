<!-- BEGIN: Main Menu-->

<div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="user-profile">
        <div class="user-info text-center pb-2">
            <img class="user-img img-fluid rounded-circle w-25 mt-2"
                src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png') }}"
                alt="{{get_user_data()?->name}}" />
            <div class="name-wrapper d-block dropdown mt-1">
                <a class="white dropdown-toggle ml-2" id="user-account" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="user-name">{{get_user_data()?->name}}</span>
                </a>
                <div class="text-light">UX Designer</div>
                <div class="dropdown-menu arrow">
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">person</i>
                        <span class="align-middle">Profile</span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">message</i>
                        <span class="align-middle">Messages</span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">attach_money</i>
                        <span class="align-middle">Balance</span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">settings</i>
                        <span class="align-middle">Settings</span>
                    </a>
                    <form method="POST" action="{{ route(get_guard_name().'.logout') }}">
                        @csrf
                        <a href="#" class="dropdown-item"
                            onclick="event.preventDefault();this.closest('form').submit();">
                            <i class="material-icons align-middle mr-1">power_settings_new</i>
                            <span class="align-middle">{{ trans('auth.logout') }}</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!-- Start Dashboard Link -->
            <li class="{{ Route::is(get_guard_name() . '.dashboard') ? 'active' : '' }}">
                <a href="{{ route(get_guard_name() . '.dashboard') }}">
                    <i class="material-icons">settings_input_svideo</i>
                    <span class="menu-title" data-i18n="{{ trans('dashboard.main') }}">{{ trans('dashboard.main') }}</span>
                </a>
            </li>
            <!-- End Dashboard Link -->

            <!-- Start Admins Link -->
            <li class="{{ Route::is(get_guard_name() . '.admins.index') ? 'active' : '' }}">
                <a href="{{ route(get_guard_name() . '.admins.index') }}">
                    <i class="material-icons">settings_input_svideo</i>
                    <span class="menu-title" data-i18n="Admins">Admins</span>
                </a>
            </li>
            <!-- End Admins Link -->

            <!-- Start Settings Menu -->
            <li class="nav-item">
                <a href="#">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        {{__('sidebar.settings')}}
                    </span>
                </a>
                <ul class="menu-content">
                    <!-- Start Language Settings -->
                    <li class="{{ Route::is(get_guard_name() . '.language.index') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route(get_guard_name() . '.language.index') }}" data-i18n="nav.dash.ecommerce">
                            {{__('sidebar.languages_settings')}}
                            <span class="badge badge badge-info badge-pill float-right mr-2">
                                {{count(LaravelLocalization::getSupportedLocales())}}
                            </span>
                        </a>
                    </li>
                    <!-- End Language Settings -->
                </ul>
            </li>
            <!-- End Settings Menu -->
        </ul>
    </div>
</div>

<!-- END: Main Menu-->