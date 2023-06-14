
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
                <h3 class="text-center"> "Campus Name" </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Time Table</li>
                </ul>
            </div>

            <div class="row  d-flex justify-content-end">

<div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
    <a href="{{ route('add-timetable') }}">
        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
            Add TimeTable
        </button>
    </a>
</div>

</div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Select Details</h3>
                        </div>

                    </div>

                    <form class="new-added-form" action="#" method="">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Class</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Section</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>



                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>View Timetable
                                </h3>
                            </div>

                        </div>
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Subject</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#12</label>
                                        </div>
                                    </td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <td>English</td>
                                    <td>Maths</td>
                                    <td>Urdu</td>
                                    <td>Islamiyat</td>
                                    <td>Chemistry</td>
                                    <td>Biology</td>
                                    <td>Computer</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href=""><i
                                                        class="fas fa-redo-alt text-orange-peel"></i>View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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

