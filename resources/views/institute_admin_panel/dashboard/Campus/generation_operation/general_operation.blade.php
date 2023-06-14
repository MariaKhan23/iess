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
                <!-- <h3 class="text-center">""</h3> -->
                <h3 class="text-center">"{{ $campusName }}"</h3>
                <ul> 
                    <li>  
                        <a href="index.html">Home</a>
                    </li>
                    <li>General operations</li>
                </ul> 
            </div>  
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container payroll-heading">
                <h3 class="text-center">General Operations</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('admissions') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/new addmission-01.png" alt="">
                                </div>
                                <h5>New Admissions</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('view-attendance') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/attendance-01.png" alt="">
                                </div>
                                <h5>View Attendance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="/assets/result-01.png" alt="">
                            </div>
                            <h5>View Results</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('pro-student') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/promote student.png" alt="">
                                </div>
                                <h5>Promote Students</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('former-student') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/former 01.png" alt="">
                                </div>
                                <h5>Former Students</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <a href="{{ route('view-timetable') }}">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="/assets/time table-01.png" alt="">
                            </div>
                            <h5>View Timetable</h5>
                        </div> 
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-syllabus') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/syllabus-01.png" alt="">
                                </div>
                                <h5>Syllabus</h5>    
                            </div>
                        </a> 
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-classes') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/class-01.png" alt="">
                                </div>
                                <h5>Classes</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-subjects') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="/assets/subject-01.png" alt="">
                                </div>
                                <h5>Subjects</h5>
                            </div>
                        </a>
                    </div>


                </div>
                <h3 class="text-center">Systems</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="/assets/LMS.png" alt="">
                            </div>
                            <h5>Learning Management(LMS)</h5>
                        </div>  
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="/assets/student-complaint.png" alt="">
                            </div>
                            <h5>Student Complaint</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="/assets/hostel.png" alt="">
                            </div>
                            <h5>Hostel Management</h5>
                        </div>
                    </div>


                </div>

            </div>
            <br>
            {{-- <div class="text-center">
                @include('institute_admin_panel.dashboard.include.poweredby')

            </div> --}}

        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
