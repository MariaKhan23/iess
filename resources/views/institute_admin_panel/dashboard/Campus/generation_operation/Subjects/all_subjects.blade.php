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
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>All Subject</li>
                </ul>
            </div>
            <div class="row  d-flex justify-content-end">

                <!-- <div class="col-2-xxxl col-xl-3 col-lg-3 col-6 form-group">
                    <a href="{{ route('add-subject') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Add New
                        </button>
                    </a>
                </div> -->
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <a href="{{ route('add-subject') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Add New
                        </button>
                    </a>
                </div>





            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <!-- 
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Subjects</h3>
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

                        <!-- table start  -->
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <!-- <th>Institute Id</th>
                                    <th>Campus Id</th> -->
                                    <th>Class </th>
                                    <th>Section</th>
                                    <th>Subjects</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @php
                                $serialNumber = 1;
                                @endphp
                                @foreach($subjects as $subject)
                                <tr>
                                    <!-- <td>{{ $subject->id }}</td> -->

                                    <!-- <td>{{ $subject->institute_id }}</td>
                                   <td>{{ $subject->campus_id }}</td> -->
                                    <td> {{ $serialNumber }}</td>
                                    <td>{{ $subject->class_name }}</td>
                                    <td>{{ $subject->section_name	}}</td>
                                    <td>{{ $subject->subject}}</td>



                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Delete</a> -->
                                                <!-- <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a> -->
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>DELETE</a>
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
                        <!-- table end  -->




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('institute_admin_panel.dashboard.include.footer')