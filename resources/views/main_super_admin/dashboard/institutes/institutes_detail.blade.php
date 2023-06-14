@include('main_super_admin.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>

<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('main_super_admin.dashboard.include.navbar')


    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('main_super_admin.dashboard.include.side_bar')


        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Students</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Student Details</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Details Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{ $view_institutes->institute_name }}</h3>
                        </div>
                    </div>
                    <div class="single-info-details">
                        <div class="item-img">
                            <img src="/main_assets/img/figure/student1.jpg" alt="student" />
                        </div>
                        <div class="item-content">
                            <div class="header-inline item-header">
                                <h3 class="text-dark-medium font-medium"></h3>
                                <div class="header-elements">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-print"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-download"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <p>
                                Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                            </p> -->
                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Institute Address:</td>
                                            <td class="font-medium text-dark-medium">
                                                {{ $view_institutes->Institute_address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Institute Password:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->institute_password }}</td>
                                        </tr>
                                        <tr>
                                            <td>Institute City:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->institute_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Institute Email:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->institute_email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Institute Contact:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->institute_contact }}</td>
                                        </tr>
                                        <tr>
                                            <td>Institute Ptcl:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->institute_ptcl }}</td>
                                        </tr>
                                        <tr>
                                            <td>Institute Password:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->institute_password }}</td>
                                        </tr>
                                        <tr>
                                            <td>Registertion Date:</td>
                                            <td class="font-medium text-dark-medium">{{ $view_institutes->updated_at->diffForHumans() }}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')