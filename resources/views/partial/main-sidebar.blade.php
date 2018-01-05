<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/avatars/'.Auth::user()->avatar) }}" class="img-circle" alt="Avatar">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="@yield("fa-dashboard")"><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview @yield("fa-it")">
                <a href="#"><i class="fa fa-laptop"></i> <span>IT</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('request-it') }}"><i class="fa fa-circle-o"></i>Request IT</a></li>
                </ul>
            </li>
            <li class="@yield("fa-profile")"><a href="{{ url('profile') }}"><i
                            class="fa fa-user"></i><span>Profile</span></a></li>
            @if(Auth::user()->position_id > 3)
                <li class="@yield("fa-employee")"><a href="{{ url('employee') }}"><i class="fa fa-users"></i> <span>Employee</span></a>
                </li>
            @endif
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>