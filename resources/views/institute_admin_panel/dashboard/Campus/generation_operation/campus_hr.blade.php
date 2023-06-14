@include('institute_admin_panel.dashboard.include.header')
<style>
    
</style>
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
                <h3 class="text-center">"Campus Name"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Human Resource</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/employee-01.png" alt="">
                            </div>
                            <h5>Employee</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/attendance-01.png" alt="">
                            </div>
                            <h5>Attendance Record</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/leave-01.png" alt="">
                            </div>
                            <h5>Leaves</h5>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/public holiday.png" alt="">
                            </div>
                            <h5>Public Holiday</h5>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/departments-01.png" alt="">
                            </div>
                            <h5>Department</h5>
                        </div>
                     </div>
                   
                </div>
            </div>
<br>
            <div class="text-center">
                @include('institute_admin_panel.dashboard.include.poweredby')

            </div>

            <!-- <div class="card height-auto">
                <div class="card-body">
                    @if(session('success-message-Institute'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('success-message-Institute') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add New Campus</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('store-institute') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Name *</label>
                                <input type="text" name="institute_name" id="institute_name" placeholder="Enter  Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Address *</label>
                                <input type="text" name="Institute_address" id="Institute_address" required
                                    placeholder="Enter  Address" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Email *</label>
                                <input type="email" name="institute_email" id="institute_email" required
                                    placeholder="Enter  Email" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Password *</label>
                                <input type="password" name="institute_password" id="institute_password" required
                                    placeholder="Enter  Password" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus City *</label>
                                <input type="text" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Contact *</label>
                                <input type="text" name="institute_contact" id="institute_contact" required
                                    placeholder="Enter Contact" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus PTCL *</label>
                                <input type="text" name="institute_ptcl" id="institute_ptcl" required
                                    placeholder="Enter Landline" class="form-control" />
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')