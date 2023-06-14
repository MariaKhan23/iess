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
                    <li>Add Section</li>
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
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Change class</h3>
                        </div>

                    </div>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif


                    <form action="{{ route('update-class', ['id' => $change_class->id]) }}" method="POST">
                        @csrf
                        <div class="row d-flex justify-content-center">

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select name="class_name" class="form-control">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}" {{ $change_class && $class->class_name == $change_class->class_name ? 'selected' : '' }}>
                                        {{ $class->class_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div> 




                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Section *</label>
                                <select name="section_name" class="form-control">
                                    <option value="">Select a Section</option>
                                    @foreach($sections as $section)
                                    <option value="{{ $section }}" {{ $change_class && $section == $change_class->section_name ? 'selected' : '' }}>
                                        {{ $section }}
                                    </option>
                                    @endforeach
                                </select>



                                <!-- <select class="form-control" aria-label="Default select example">
                                    <option selected>Section</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select> -->
                                <!-- <select name="section_name" class="form-control">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->section_name }}" {{ $change_class && $class->section_name == $change_class->section_name ? 'selected' : '' }}>
                                        {{ $class->section_name }}
                                    </option>
                                    @endforeach
                                </select> -->
                            </div>



                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mt-4 form-group">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
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