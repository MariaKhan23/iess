@include('main_super_admin.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('main_super_admin.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('main_super_admin.dashboard.include.side_bar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one"> 
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center"></h3>
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
              
              
              @if(session('old-pass'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('old-pass') }}.
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
                    <form class="new-added-form" action="{{ route('update-main-super-admin-settings', ['id' => $userData->id]) }}" method="POST">
                        @csrf 
                        <div class="row">

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Admin Name *</label>
                                <input type="text" name="admin_name" id="first_name" placeholder="Enter  Name" value="{{$userData->admin_name}}"
                                    required class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Admin Number *</label>
                                <input type="text" name="admin_number" id="last_name" value="{{$userData->admin_number}}" required
                                    placeholder="Enter last name" class="form-control" />
                            </div> 

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Admin Username *</label>
                                <input type="text" name="admin_username" id="last_name" value="{{$userData->admin_username}}" required
                                    placeholder="Enter last name" class="form-control" />
                            </div>

                            <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Profile image *</label>
                                <input type="file" name="image" id="image" required placeholder="Enter Contact"
                                    class="form-control" />
                            </div> -->
                        </div>

                        <!-- Login Credential -->
                        <div class="heading-layout1">
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Login Credentials</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Admin Email *</label>
                                <input type="text" name="admin_email" id="user_name" placeholder="Username.." value="{{$userData->admin_email}}" required
                                    class="form-control" />
                            </div>

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Admin Username*</label>
                                <input type="text" name="user_name" id="user_name" placeholder="Username.." required
                                    class="form-control" />
                            </div> -->

                            <!-- <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>New Password*</label>
                                <input type="text" name="admin_password" id="password" value="{{$userData->admin_password}}" required placeholder="Password"
                                    class="form-control" />
                            </div> -->

                            <!-- new and retype  -->
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Old Password*</label>
                                <input type="text" name="old_password" id="password" value="" required placeholder="Password"
                                    class="form-control" />
                            </div>


                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>New Password*</label>
                                <input type="text" name="new_password" id="password" value="" required placeholder="Password"
                                    class="form-control" />
                            </div>


                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Retype Password*</label>
                                <input type="text" name="retype_password" id="password" value="" required placeholder="Password"
                                    class="form-control" />
                            </div> 
                            <!-- new and retype  -->

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
@include('main_super_admin.dashboard.include.footer')
