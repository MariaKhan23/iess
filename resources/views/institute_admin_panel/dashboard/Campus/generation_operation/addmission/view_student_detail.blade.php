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
                <h3 class="text-center">"Campus Name"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Students Details</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Details Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3></h3>{{ $view_student->first_name }}</h3>
                        </div> 
                    </div>
                    <div class="single-info-details">
                        <div class="item-img">
                            
                            <img src="/campus/general_operations/student_image/{{ $view_student->student_img }}" alt="student_img" width="250" height="500"/>
                            
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
                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>First Name</td>
                                            
                                                <td class="font-medium text-dark-medium">
                                                    {{ $view_student->first_name }}
                                                </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td class="font-medium text-dark-medium">
                                                {{ $view_student->last_name }}
                                            </td>
                                        </tr>   <tr>
                                            <td>Surname</td>
                                            <td class="font-medium text-dark-medium">
                                                {{ $view_student->surname }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td class="font-medium text-dark-medium">
                                                {{ $view_student->gender }} </td>
                                        </tr>
                                        <tr>
                                            <td>religion:</td>
                                            <td class="font-medium text-dark-medium">
                                                {{ $view_student->religion }} </td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth:</td>
                                            <td class="font-medium text-dark-medium">
                                                {{ $view_student->birth_date }}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-6">
                            <h3> Parents Details</h3>
                             <div class="single-info-details">
                                <div class="item-content">
                                    
                                    <!-- <p>
                                        Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                        taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                                    </p> -->
                                    <div class="info-table table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Father Name:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        {{ $view_student->father_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>contact:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        {{ $view_student->contact }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Address:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        {{ $view_student->Address }}</td>
                                                </tr>
                                        
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <h3> Academic Details</h3>
                             <div class="single-info-details">
                                <div class="item-content">
                                    <!-- <p>
                                        Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                        taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                                    </p> -->
                                    <div class="info-table table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Enrollment Date:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        {{ $view_student->enrollment_date }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Name:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        {{ $view_student->class_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Section</td>
                                                    <td class="font-medium text-dark-medium">
                                                       {{ $view_student->section_name }} </td>
                                                </tr>

                                                <tr>
                                                    <td>GR#</td>
                                                    <td class="font-medium text-dark-medium">
                                                       {{ $view_student->gr }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Scholarship</td>
                                                    <td class="font-medium text-dark-medium">
                                                       {{ $view_student->scholarship_percentage }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Last School</td>
                                                    <td class="font-medium text-dark-medium">
                                                       {{ $view_student->last_school }} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="student-detail-img row mt-4">
                         <div class="col-4">
                            <h3>Birth Certificates</h3>
                            <img src="/campus/general_operations/birth_certificates/{{ $view_student->birth_certificate_img }}" 
                            alt="birth_certificate_img"/>
                        </div>
                          <div class="col-4">
                            <h3>Covid Certificates</h3>
                            <img src="/campus/general_operations/covid_certificate_image/{{ $view_student->covid_certificate_img }}" 
                            alt="covid_certificate_image"/>
                        </div>
                          <div class="col-4">
                            <h3>Leaving Certificates</h3>
                            <img src="/campus/general_operations/leaving_certificate_image/{{ $view_student->leaving_certificate_img }}" 
                            alt="leaving_certificate_image"/>
                        </div>
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
