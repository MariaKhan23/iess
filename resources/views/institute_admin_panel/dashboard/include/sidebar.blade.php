<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <!-- <div class="header-logo">
               <a href="/main_assets/index.html"><img src="/main_assets/img/logo1.png" alt="logo"></a>
           </div> -->
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
                <a href="{{ route('institute_Dashboard') }}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Campus</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('add-campus') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Campus </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('all-Campuses') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Campuses</a>
                    </li>
                </ul>
            </li>


            @if(@session('all_campuses_fr_side'))
            @foreach(@session('all_campuses_fr_side') as $campus)
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class=" fas fa-thin fa-school"></i><span>{{ $campus->campus_name}}</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <!-- <a href="{{ route('campus-general-operation',['id' => $campus->id ]) }}" class="nav-link"><i
                                    class="fas fa-thin fa-graduation-cap"></i>General operations</a> -->
                        <!-- <a href="{{ route('campus-general-operation', ['id' => $campus->id]) }}" class="nav-link">
                            <i class="fas fa-thin fa-graduation-cap"></i>General operations
                        </a> -->
                        <a href="{{ route('campus-general-operation', ['id' => $campus->id]) }}" class="nav-link">
                            <i class="fas fa-thin fa-graduation-cap"></i>General operations
                        </a>
                    </li> 
 
                    <li class="nav-item">
                        <a href="{{ route('campus-hr') }}" class="nav-link"><i class="fa-solid fa-person"></i>HR</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('campus-exams') }}" class="nav-link"><i class="fa-regular fa-note-sticky"></i>Exams</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('campus-accounts') }}" class="nav-link"><i class="fa-solid fa-file-invoice-dollar"></i>Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('digital-library') }}" class="nav-link"><i class="fa-solid fa-book"></i>Digital Library</a>
                    </li>
                </ul>
            </li>
            @endforeach
            @endif

        </ul>
    </div>
</div>