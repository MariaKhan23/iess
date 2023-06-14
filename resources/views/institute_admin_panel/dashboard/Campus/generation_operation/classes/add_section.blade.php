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
                <h3 class="text-center">"
                    {{ @session('campus_name') }}"
                </h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Add Section</li>
                </ul>
            </div>

            <!-- <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route ('back-section') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Back 
                        </button>
                    </a>
                </div> -->

            <div class="row d-flex justify-content-end">
                <a href="{{ route('back-section') }}">
                    <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Back
                    </button>
                </a>
            </div>

            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->

                    @if(session()->has('success-message-section'))
                    <div class="alert alert-success">
                        {{ session('success-message-section') }}
                    </div>
                    @endif



                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Section</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="{{ route('store-section')}}" method="POST">
                        @csrf
                        <div class="row d-flex justify-content-center">

                            <input type="hidden" name="institute_id" value="{{ session('institute_id') }}">
                            <input type="hidden" name="campus_id" value="{{ session('campus_id') }}">

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Class  Name"
                                    required class="form-control" />
                            </div> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select name="class_name" required class="form-control">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <input type="hidden" name="campus_id" value="{{ session('campus_id') }}"> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Add Section *</label>
                                <input type="text" name="section_name" id="first_name" placeholder="Section Name" required class="form-control" />
                            </div>



                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mt-4 form-group">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>
                        </div>

                        <!-- Parents Details -->




                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')