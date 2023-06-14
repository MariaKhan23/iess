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
                    <li>All Syllabus</li>
                </ul>
            </div>
            <div class="row  d-flex justify-content-end">

                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route('add-syllabus') }}">
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

                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    @if(session('delete-message-syllabus'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('delete-message-syllabus') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif


                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Syllabus</h3>
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
                                    <th>
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div> -->
                                    </th>
                                    <th>S.No</th>
                                    <!-- <th>Institute Id</th>
                                    <th>Campus ID</th> -->
                                    <th>Class Name</th>
                                    <th>Section Name</th>
                                    <th>subject Name</th>
                                    <th>Author Name</th>
                                    <th>Book Name</th>
                                    <th>No: Of Chapters</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $serialNumber = 1;
                                @endphp
                                @foreach($all_syllabus as $all)
                                <tr>
                                    <td>
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#12</label>
                                        </div> -->
                                    </td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <!-- <td>{{$all->id}}</td> -->

                                    <td> {{ $serialNumber }}</td> <!-- <td>{{$all->institute_id}}</td>
                                    <td>{{$all->campus_id}}</td> -->
                                    <td>{{$all->class_name}}</td>
                                    <td>{{$all->section_name}}</td>
                                    <td>{{$all->subject_name}}</td>
                                    <td>{{$all->author_name}}</td>
                                    <td>{{$all->book_name}}</td>
                                    <td>{{$all->no_of_chapters}}</td>

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('delete-syllabus',['id' => $all->id ]) }}"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="{{ route('edit-syllabus',['id' => $all->id ]) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <!-- <a class="dropdown-item" href="#"><i
                                                        class="fas fa-redo-alt text-orange-peel"></i>View</a> -->
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