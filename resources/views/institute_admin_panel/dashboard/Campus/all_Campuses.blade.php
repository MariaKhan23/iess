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
                <h3>Students</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>{{$pagename}}</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('delete-message-Institute'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('delete-message-Institute') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{$pagename}}</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>View</a>
                            </div>
                        </div>
                    </div>
                    <form class="mg-b-20">
                        <div class="row gutters-8">
                            <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Roll ..." class="form-control" />
                            </div>
                            <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Name ..." class="form-control" />
                            </div>
                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Class ..." class="form-control" />
                            </div>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    SEARCH
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>

                                    <!-- <th>ID</th> -->
                                    <th>S.No</th>
                                    <th>Institute Name</th>
                                    <th>Institute ID</th>
                                    <th>Campus Name</th>
                                    <th>Campus Address</th>
                                    <th>Campus Phone</th>
                                    <th>Campus Website</th>
                                    <th>Campus Email</th>
                                    <th>Campus Password</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $serialNumber = 1;
                                @endphp
                                <!-- foreach start  -->
                                @foreach($all_campuses as $campus)
                                <tr>
                                    <!-- <td>
                                        <label class="form-check-label">{{$campus->id}}</label>
                                    </td> -->
                                    <td> {{ $serialNumber }}</td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <!-- <td>Institute name</td> -->
                                    <td>{{ $campus->institute_name }}</td>
                                    <td>{{ $campus->institute_id }}</td>
                                    <td>{{ $campus->campus_name }}</td>
                                    <td>{{ $campus->campus_address }}</td>
                                    <td>{{ $campus->campus_phone }}</td>
                                    <td>{{ $campus->campus_website }}</td>
                                    <td>{{ $campus->campus_email }}</td>
                                    <td>{{ $campus->campus_password }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="{{ route('edit-campus',['edit' => $campus->id ]) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>

                                                <a class="dropdown-item" href="{{ route('view-campus',['view' => $campus->id ]) }}"><i class="fas fa-redo-alt text-orange-peel"></i>View</a>

                                                <a class="dropdown-item" href="{{ route('delete-campus',['delete' => $campus->id ]) }}"><i class="fas fa-lock text-orange-red"></i>Lock</a>

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