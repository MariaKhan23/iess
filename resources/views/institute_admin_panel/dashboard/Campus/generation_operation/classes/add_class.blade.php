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
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Add Class</li>
                </ul>
            </div>

            <!-- <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route('back-list') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Back  
                        </button>
                    </a>
                </div> -->
                <div class="row d-flex justify-content-end">
                <a href="{{ route('back-list') }}">
                    <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Back
                        </button>
                </a>
               
            </div>
                

                
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('success-message-class'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('success-message-class') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> 
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Class</h3>
                        </div>
                       
                    </div>
                    <form class="new-added-form" action="{{ route('store-class') }}" method="POST">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Class *</label>
                                <input type="text" name="class_name" id="class_name" placeholder="Class  Name"
                                    required class="form-control" />
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



<form action="{{ route('store-class') }}" method="POST">
    @csrf
    <input type="hidden" name="campus_id" value="{{ session('campus_id') }}">
    <!-- Other form fields -->
    <button type="submit">Add Class</button>
</form>
