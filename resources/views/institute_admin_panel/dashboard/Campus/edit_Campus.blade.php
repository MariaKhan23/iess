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
        <h3>Institute</h3>
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>{{$pagename}}</li>
        </ul>
      </div>
      <!-- Breadcubs Area End Here -->
      <!-- Admit Form Area Start Here -->
      <div class="card height-auto">
        <div class="card-body">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> {{ session('success') }}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <div class="heading-layout1">
            <div class="item-title">
              <h3>Edit Campus</h3>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
              </div>
            </div>
          </div>

          <form class="new-added-form" action="{{ route('save-edit-campus',['id'=> $Campusdetails->id ]) }}" method="POST">
            @csrf
            <div class="row">

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Name *</label>
                <input type="text" name="campus_name" id="institute_name" placeholder="Enter  Name" required class="form-control" value="{{ $Campusdetails->campus_name }}" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Address *</label>
                <input type="text" name="campus_address" id="Institute_address" required placeholder="Enter  Address" class="form-control" value="{{ $Campusdetails->campus_address }}" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Phone *</label>
                <input type="phone" name="campus_phone" id="institute_email" required placeholder="Enter  Email" class="form-control" value="{{ $Campusdetails->campus_phone }}" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Website *</label>
                <input type="text" name="campus_website" id="institute_city" required placeholder="Enter City" class="form-control" value="{{ $Campusdetails->campus_website }}" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Email *</label>
                <input type="email" name="campus_email" id="institute_contact" required placeholder="Enter Contact" class="form-control" value="{{ $Campusdetails->campus_email }}" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Password *</label>
                <input type="password" name="campus_password" id="institute_ptcl" required placeholder="Enter Landline" class="form-control" value="{{ $Campusdetails->campus_password }}" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Confirm Campus Password *</label>
                <input type="password" name="confirm_password" id="institute_ptcl" required placeholder="Enter confirm Password" class="form-control" value="" />
                @error('confirm_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
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