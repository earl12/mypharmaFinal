<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item admin-logo">
                        <a class="link-effect font-w700" href="{{ url('/') }}">
                            <i class="si si-map text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark logo-1">My</span><span class="font-size-xl text-primary logo-1">pharma</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src=" {{ asset('assets/img/avatars/default.jpg') }} " alt="">


                    <mini-avatar ></mini-avatar>

                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="{{ route('user.profile',Auth::user()->id) }}">
                        <img class="img-avatar" src="{{ asset('assets/img/avatars/default.jpg') }} " alt="">
                        

                        <user-avatar></user-avatar>


                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="{{ route('user.profile',Auth::user()->id) }}">{{ auth()->user()->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="{{ url('logout') }} ">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li >
                        <a href="{{ route('admin.dashboard') }}" @if (Request::is('admin/dashboard')) class="active" @endif><i class="si si-compass"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>

                    <li >
                        <a @if (Request::is('admin/members/create')) class="active" @endif href="{{ route('members.create') }}"><i class="si si-user-follow"></i><span class="sidebar-mini-hide">Create New User</span></a>
                    </li>

                    <li>
                        <a  @if (Request::is('admin/members')) class="active" @endif href="{{ route('members.index') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">All Members</span></a>
                    </li>

                    <li>
                        <a href="{{ route('barangays.index') }}" @if (Request::is('admin/barangays')) class="active" @endif ><i class="si si-grid"></i><span class="sidebar-mini-hide">Barangays</span></a>
                    </li>

                    <li>
                        <a href="{{ route('medicines.index') }}" @if (Request::is('admin/medicines')) class="active" @endif><i class="si si-list"></i><span class="sidebar-mini-hide">Medicines</span></a>
                    </li>


                    <li>
                        <a href="{{ route('deliveries.realtime') }}" @if (Request::is('admin/deliveries')) class="active" @endif><i class="si si-compass"></i><span class="sidebar-mini-hide">Monitor Deliveries</span></a>
                    </li>


                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>


