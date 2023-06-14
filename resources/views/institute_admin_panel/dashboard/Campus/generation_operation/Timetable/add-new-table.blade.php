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
                <h3 class="text-center">"Campus Name"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Student form</li>
                </ul>
            </div>  

            <div class="card height-auto">
                <div class="card-body">


                    <form class="new-added-form" action="{{ route('save-timetable') }}" method="POST"> 
                        @csrf    
                        <input type="text" value="{{ $class }}" name="class">
                        <input type="text" value="{{ $section }}" name="section">
                        <input type="text" value="{{ $subject }}" name="subject">


                        <!-- Time table detail -->
                        <div class="heading-layout1">
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Add Timetable</h3>
                            </div>
                        </div>

  
                        <h3>Monday</h3>  
                        <div class="row">  
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Monday]" id="time_start" class="form-control" />
                            </div> 
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Monday]" id="time_end"  class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02" name="teacher[Monday]">
                                    <option value="1">Dr.Ahsna Ansari</option>
                                    <option value="2">Sir wahab</option>
                                    <option value="3">Prof Usman</option>
                                </select>
                            </div>



                        </div>





                        <hr />
                        <h3>Tuesday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Tuesday]" id="time_start"  class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Tuesday]" id="time_end"  class="form-control" /> 
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02" name="teacher[Tuesday]">
                                    <option value="1">Dr.Ahsna Ansari</option>
                                    <option value="2">Sir wahab</option>
                                    <option value="3">Prof Usman</option>
                                </select>
                            </div>



                        </div>

                        <hr />
                        <h3>Wednesday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Wednesday]" id="time_start"  class="form-control" />
                            </div>   
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Wednesday]" id="time_end"  class="form-control" />
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02"  name="teacher[Wednesday]">
                                    <option value="1">Dr.Ahsna Ansari</option>
                                    <option value="2">Sir wahab</option>
                                    <option value="3">Prof Usman</option>
                                </select>
                            </div>



                        </div>

                        <hr />
                        <h3>Thursday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Thursday]" id="time_start"  class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Thursday]" id="time_end" class="form-control" />
                            </div>   

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02" name="teacher[Thursday]">
                                    <option value="1">Dr.Ahsna Ansari</option>
                                    <option value="2">Sir wahab</option>
                                    <option value="3">Prof Usman</option>
                                </select>
                            </div>



                        </div>

                        <hr />
                        <h3>Friday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Friday]" id="time_start"  class="form-control" />  
                            </div>  
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Friday]" id="time_end" class="form-control" />  
                            </div>  

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02" name="teacher[Friday]">
                                    <option value="1">Dr.Ahsna Ansari</option>
                                    <option value="2">Sir wahab</option>
                                    <option value="3">Prof Usman</option>
                                </select>
                            </div>

                        </div>
                        <hr/> 
                        <h3>Saturday</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time Start *</label>
                                <input type="time" name="time_start[Saturday]" id="time_start" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Time End*</label>
                                <input type="time" name="time_end[Saturday]" id="time_end" class="form-control" />  
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" id="inputGroupSelect02" name="teacher[Saturday]">
                                    <option value="1">Dr.Ahsna Ansari</option>
                                    <option value="2">Sir wahab</option>
                                    <option value="3">Prof Usman</option>
                                </select>
                            </div>



                        </div>

                        <hr />
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Add
                            </button>
                        </div>
                    </form>

                </div>
            </div>   
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')