<div class="az-sidebar-body">
    <ul class="nav">
        <li class="nav-label">Main Menu</li>
        <li class="nav-item active show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Home</a>
            <nav class="nav-sub">
                <a href="{{route('admin.index')}}" class="nav-sub-link">Dashboard</a>

            </nav>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Services Profile</a>
            <nav class="nav-sub">
                <a href="{{route('services.create')}}" class="nav-sub-link">Create Services</a>
                <a href="{{route('services.index')}}" class="nav-sub-link">View/Edit Users</a>

            </nav>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i>Users</a>
            <nav class="nav-sub">
            <a href="{{url('/user/create')}}" class="nav-sub-link">Create Users</a>
            <a href="{{route('user.index')}}" class="nav-sub-link">View/Edit Users</a>

            </nav>
        </li><!-- nav-item -->
        {{--<li class="nav-item">--}}
            {{--<a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>UI Elements</a>--}}
            {{--<nav class="nav-sub">--}}
                {{--<a href="elem-accordion.html" class="nav-sub-link">Accordion</a>--}}
                {{--<a href="elem-alerts.html" class="nav-sub-link">Alerts</a>--}}
                {{--<a href="elem-buttons.html" class="nav-sub-link">Buttons</a>--}}
                {{--<a href="elem-cards.html" class="nav-sub-link">Cards</a>--}}
                {{--<a href="elem-icons.html" class="nav-sub-link">Icons</a>--}}
                {{--<a href="elem-modals.html" class="nav-sub-link">Modals</a>--}}
                {{--<a href="elem-navigation.html" class="nav-sub-link">Navigation</a>--}}
                {{--<a href="elem-pagination.html" class="nav-sub-link">Pagination</a>--}}
                {{--<a href="elem-tooltip.html" class="nav-sub-link">Tooltip</a>--}}
                {{--<a href="elem-popover.html" class="nav-sub-link">Popover</a>--}}
                {{--<a href="elem-progress.html" class="nav-sub-link">Progress</a>--}}
            {{--</nav>--}}
        {{--</li><!-- nav-item -->--}}
        {{--<li class="nav-item">--}}
            {{--<a href="#" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Forms</a>--}}
            {{--<nav class="nav-sub">--}}
                {{--<a href="form-elements.html" class="nav-sub-link">Form Elements</a>--}}
                {{--<a href="form-layouts.html" class="nav-sub-link">Form Layouts</a>--}}
                {{--<a href="form-validation.html" class="nav-sub-link">Form Validation</a>--}}
                {{--<a href="form-wizards.html" class="nav-sub-link">Form Wizards</a>--}}
                {{--<a href="form-editor.html" class="nav-sub-link">WYSIWYG Editor</a>--}}
            {{--</nav>--}}
        {{--</li><!-- nav-item -->--}}
        {{--<li class="nav-item">--}}
            {{--<a href="#" class="nav-link with-sub"><i class="typcn typcn-chart-bar-outline"></i>Charts</a>--}}
            {{--<nav class="nav-sub">--}}
                {{--<a href="chart-morris.html" class="nav-sub-link">Morris Charts</a>--}}
                {{--<a href="chart-flot.html" class="nav-sub-link">Flot Charts</a>--}}
                {{--<a href="chart-chartjs.html" class="nav-sub-link">ChartJS</a>--}}
                {{--<a href="chart-sparkline.html" class="nav-sub-link">Sparkline</a>--}}
                {{--<a href="chart-peity.html" class="nav-sub-link">Peity</a>--}}
            {{--</nav>--}}
        {{--</li><!-- nav-item -->--}}
        {{--<li class="nav-item">--}}
            {{--<a href="#" class="nav-link with-sub"><i class="typcn typcn-map"></i>Maps</a>--}}
            {{--<nav class="nav-sub">--}}
                {{--<a href="map-google.html" class="nav-sub-link">Google Maps</a>--}}
                {{--<a href="map-leaflet.html" class="nav-sub-link">Leaflet</a>--}}
                {{--<a href="map-vector.html" class="nav-sub-link">Vector Maps</a>--}}
            {{--</nav>--}}
        {{--</li><!-- nav-item -->--}}
        {{--<li class="nav-item">--}}
            {{--<a href="#" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Tables</a>--}}
            {{--<nav class="nav-sub">--}}
                {{--<a href="table-basic.html" class="nav-sub-link">Basic Tables</a>--}}
                {{--<a href="table-data.html" class="nav-sub-link">Data Tables</a>--}}
            {{--</nav>--}}
        {{--</li><!-- nav-item -->--}}
    </ul><!-- nav -->
</div><!-- az-sidebar-body -->
</div><!-- az-sidebar -->
<div class="az-content az-content-dashboard-nine">
    <div class="az-header az-header-dashboard-nine">
        <div class="container-fluid">
            <div class="az-header-left">
                <a href="#" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-center">
                <input type="search" class="form-control" placeholder="Search for anything...">
                <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
            <div class="az-header-right">
                <div class="az-header-message">
                     <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="typcn typcn-power-outline"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div><!-- az-header-message -->
               
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->
    <!-- az-content-header -->