<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <!-- <div class="header-logo">
               <a href="/main_assets/index.html"><img src="/main_assets/img/logo1.png" alt="logo"></a>
           </div> -->
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
                <a href="{{ route('main-dashboard') }}" class="nav-link"><i
                        class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Institutes</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('add-institute') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Institutes Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all-institute') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Institutes</a>
                    </li>
                    <!-- <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Institutes Details</a>
            </li> -->
                </ul>
            </li>
        </ul>
    </div>
</div>