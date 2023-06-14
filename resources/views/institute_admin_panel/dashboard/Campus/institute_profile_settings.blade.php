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
                <h3 class="text-center">{{$Data->institute_name}}</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Account Setting</li>
                </ul>
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
                    <!-- alert  -->
                    @if(session('success-message-update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('success-message-update') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif


                    @if(session('failed'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                       {{ session('failed') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if(session('dont-match'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                         {{ session('dont-match') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif


                    <!-- alert  -->
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Account Setting</h3>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('update-institute-settings', ['id' => $Data->id]) }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Insitute Name *</label>
                                <input type="text" name="institute_name" id="first_name" placeholder="Enter  Name" value="{{$Data->institute_name}}" required class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Insitute City *</label>
                                <input type="text" name="institute_city" id="last_name" value="{{$Data->institute_city}}" required placeholder="Enter last name" class="form-control" />
                            </div>


                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Insitute Contact *</label>
                                <input type="text" name="institute_contact" id="last_name" value="{{$Data->institute_contact}}" required placeholder="Enter last name" class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Insitute PTCL *</label>
                                <input type="text" name="institute_ptcl" id="last_name" value="{{$Data->institute_ptcl}}" required placeholder="Enter last name" class="form-control" />
                            </div>

                        </div>

                        <!-- Login Credential -->
                        <div class="heading-layout1"> 
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Change Password</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Institute Email *</label>
                                <input type="text" name="institute_email" id="user_name" placeholder="Username.." value="{{$Data->institute_email}}" required class="form-control" />
                            </div>

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Institute Username*</label>
                                <input type="text" name="Institute_username" id="password" value="{{$Data->Institute_username}}" required placeholder="Password" class="form-control" />
                            </div>

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Institute Password*</label>
                                <input type="password" name="institute_password" id="password" value="{{$Data->institute_password}}" required placeholder="Password" class="form-control" />
                            </div> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Old Password*</label>
                                <input type="password" name="old_password" id="password" value="" required placeholder="Password" class="form-control" />
                            </div>


                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>New Password*</label>
                                <input type="password" name="new_password" id="password" value="" required placeholder="Password" class="form-control" />
                            </div>

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Retype Password*</label>
                                <input type="password" name="retype_password" id="password" value="" required placeholder="Password" class="form-control" />
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                   Update
                                </button>
                            </div>

                        </div>
                    </form>

                </div> 
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')