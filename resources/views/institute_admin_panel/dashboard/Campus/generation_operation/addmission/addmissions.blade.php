@include('institute_admin_panel.dashboard.include.header')



<!-- Preloader Start Here -->
<div id="preloader"></div>


<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->

    @include('institute_admin_panel.dashboard.include.navbar')

    <div class="dashboard-page-one">

        <!-- Sidebar Area Start Here -->

        @include('institute_admin_panel.dashboard.include.sidebar')

        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">

            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"
                    {{ @session('campus_name') }}"
                </h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Admissions</li>
                </ul>
            </div>
            <div class="row  d-flex justify-content-end">

                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route('add-Student') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Add student
                        </button>
                    </a>
                </div>

            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Students</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>
                            <!-- <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Name ..." class="form-control" />
                            </div>
                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Class ..." class="form-control" />
                            </div> -->
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <!-- <th>  -->
                                    <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>  -->
                                    <!-- ID
                                    </th> -->
                                    <th>S.No</th>
                                    <th>Student Image</th>
                                    <th>Student Name</th>
                                    <th>GR No:</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>House</th>
                                    <th>Enrollment</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            @php
                            $serialNumber = 1;
                            @endphp
                            <tbody>
                                @foreach($student_list as $student_list)
                                <tr>
                                    <!-- <td> -->
                                    <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label"></label>
                                        </div> -->
                                    <!-- {{$loop->iteration}} -->
                                    <!-- </td> -->

                                    <td> {{ $serialNumber }} </td>

                                    <td>
                                        <img src="/campus/general_operations/student_image/{{ $student_list->student_img }}" alt="student_img" class="rounded-circle" width="80px" height="80px">
                                    </td>
                                    <td>{{$student_list->first_name}}</td>
                                    <td>{{$student_list->gr}}</td>
                                    <td>{{$student_list->class_name}}</td>
                                    <td>{{$student_list->section_name}}</td>
                                    <td>{{$student_list->Address}}</td>
                                    <td>{{$student_list->enrollment_date}}</td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('change-class' ,['id' => $student_list->id ]) }}">
                                                    <i class="fad fa-users-class"></i>Change Class</a>

                                                <a class="dropdown-item" href="{{ route('edit-student' ,['id' => $student_list->id ]) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>

                                                <a class="dropdown-item" href="{{ route('view-student' ,['id' => $student_list->id ]) }}"><i class="fas fa-bed text-orange-peel"></i>View</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @php
                                $serialNumber++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')