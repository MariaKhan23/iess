@include('main_super_admin.dashboard.include.header')


<!-- Preloader Start Here -->
<div id="preloader"></div>


<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->

    @include('main_super_admin.dashboard.include.navbar')
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
                    <li>All Students</li>
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
                            <h3>All Students Data</h3>
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
                                    <th>ID</th>
                                    <th>institute Name</th>
                                    <th>Institute Password</th>
                                    <th>Institute City</th>
                                    <th>Institute Email</th>
                                    <th>Institute Contact</th>
                                    <th>Institute Ptcl</th>
                                    <th>Registertion</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registered_institutes as $registered_institute)
                                <tr>
                                    <td>
                                        <label class="form-check-label">#{{ $registered_institute->id }}</label>
                                    </td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <td>{{ $registered_institute->institute_name }}</td>
                                    <td>{{ $registered_institute->institute_password }}</td>
                                    <td>{{ $registered_institute->institute_city }}</td>
                                    <td>{{ $registered_institute->institute_email }}</td>
                                    <td>{{ $registered_institute->institute_contact }}</td>
                                    <td>{{ $registered_institute->institute_ptcl }}</td>
                                    <td>{{ $registered_institute->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('view-institute',['view' => $registered_institute->id ]) }}"><i class="fas fa-redo-alt text-orange-peel"></i>View</a>

                                                <a class="dropdown-item" href="{{ route('edit-institute',['edit' => $registered_institute->id ]) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <!-- <a class="dropdown-item" href="{{ route('delete-institute',['delete' => $registered_institute->id ]) }}"><i
                                                    class="fas fa-times text-orange-red"></i>Delete</a> -->

                                                <!-- original  -->
                                                <!-- <a class="dropdown-item" href="{{ route('delete-institute',['delete' => $registered_institute->id ]) }}" class="your-button-class"><i
                                                    class="fas fa-lock text-orange-red"></i>Lock</a> -->
                                                <!-- original end  -->

                                                <form id="update-active-form" action="{{ route('update-active-status', ['id' => $registered_institute->id]) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="dropdown-item your-button-class">
                                                        <i class="fas fa-lock text-orange-red"></i> Lock
                                                    </button>
                                                </form>

                                                



                                                <!-- <a class="lock-button" data-user-id="{{ $registered_institute->id }}" href="#"><i class="fas fa-lock text-orange-red"></i>Lock</a> -->



                                                <!-- <a class="dropdown-item" href="{{ route('delete-institute', $registered_institute->id ) }}"><i
                                                    class="fas fa-lock text-orange-red"></i>Lock</a> -->
                                                <!-- <a class="dropdown-item lock-user-btn" data-id="{{ $registered_institute->id }}" href="#">
    <i class="fas fa-lock text-orange-red"></i>Lock
</a> -->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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

@include('main_super_admin.dashboard.include.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>  
    $('#update-active-form').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    var method = form.attr('method');
    var data = form.serialize();

    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function(response) {
            // Handle the success response
            console.log(response);
            // Refresh the item list or update the UI
        },
        error: function(xhr, status, error) {
            // Handle the error response
            console.log(xhr.responseText);
        }
    });
});


</script>


