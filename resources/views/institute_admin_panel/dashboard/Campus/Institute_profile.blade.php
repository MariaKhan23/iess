@include('institute_admin_panel.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>

<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
@include('institute_admin_panel.dashboard.include.navbar')


    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
@include('institute_admin_panel.dashboard.include.sidebar')


        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center"></h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>profile Details</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Details Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>My Profile</h3>
                        </div>
                    </div>
                    <div class="single-info-details">
                        <!-- <div class="item-img">
                            <img src="/main_assets/img/figure/student1.jpg" alt="student" />
                        </div> -->
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
                                            <td>institute_name:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->institute_name}}
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>Campus Address:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->Institute_username}}
                                            
                                            </td>
                                        </tr> 

                                        <tr>
                                            <td>Campus Phone:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->Institute_address}}
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Campus Website:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->institute_password}}
                                           

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Campus Email:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->institute_city}}
                                            
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Campus Password:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->institute_email}}
                                            
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Campus Password:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->institute_contact}}
                                            
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Campus Password:</td>
                                            <td class="font-medium text-dark-medium">
                                            {{$InstituteData->institute_ptcl}}
                                            
                                            </td>
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
@include('institute_admin_panel.dashboard.include.footer')




