<div class="az-sidebar-body">
    <ul class="nav">
        <li class="nav-label">Main Menu</li>
        <li class="nav-item active show">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Home</a>
            <nav class="nav-sub">
                <a href="/guest" class="nav-sub-link">Dashboard</a>

            </nav>
        </li><!-- nav-item -->
        
       <!-- nav-item -->
       
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