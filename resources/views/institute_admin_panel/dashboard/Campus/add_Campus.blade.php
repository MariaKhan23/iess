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
        <h3>Admin Dashboard</h3>
        <ul>
          <li>
            <a href="/main_assets/home.html">Home</a>
          </li>
          <li>Admin</li>
        </ul>
      </div>
      <!-- Breadcubs Area End Here -->
      <!-- Dashboard summery Start Here -->

      <!-- Dashboard summery End Here -->
      <!-- Dashboard Content Start Here -->

      <!-- Dashboard Content End Here -->
      <!-- Social Media Start Here -->

      <!-- Social Media End Here -->
      <!-- form   -->
      <div class="card height-auto">
        <div class="card-body">
         
        @if(session('added-message-Institute'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('added-message-Institute') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

          <div class="heading-layout1">
            <div class="item-title">
              <h3>Add New Institute</h3>
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


      
          <!-- form   -->
          <form class="new-added-form" action="{{ route('store-campus') }}" method="POST">
            @csrf
            <div class="row">

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Name *</label>
                <input type="text" name="campus_name" id="campus_name" placeholder="Campus Name" required class="form-control" />
              </div>


              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Address*</label>
                <input type="text" name="campus_address" id="campus_address" required placeholder="Campus Address" class="form-control" />
              </div>

              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Phone *</label>
                <input type="phone" name="campus_phone" id="campus_phone" required placeholder="Campus Phone" class="form-control" />
              </div>


              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Website *</label>
                <input type="text" name="campus_website" id="campus_website" required placeholder="Campus Website" class="form-control" />
              </div>


              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Email *</label>
                <input type="email" name="campus_email" id="campus_email" required placeholder="Campus Email" class="form-control" />
              </div>


              <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Campus Password *</label>
                <input type="password" name="campus_password" id="campus_password" required placeholder="Campus Password" class="form-control" />
              </div>

              
              

              <div class="col-12 form-group mg-t-8">
                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                  Save
                </button>
              </div>
            </div>
          </form>
          <!-- form end  -->

        </div>
      </div>
      <!-- form   -->
    </div>
  </div>
  <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')