@include('institute_admin_panel.dashboard.include.header')


<!-- Preloader Start Here -->
<div id="preloader"></div>


<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->

    @include('institute_admin_panel.dashboard.include.navbar')

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
                    <li>Sections</li>
                </ul>
            </div>
            <!-- <div class="row d-flex justify-content-end">
                <a href="{{ route('add-class') }}">
                    <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Add
                        Class</button>
                </a>
                <a href="{{ route('add-section') }}">
                    <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 14px">Add
                        Section</button>
                </a>
            </div> -->
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Classes</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
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
                                    <th>S.No</th>
                                    <th>Class Name</th>
                                    <th>Section Name</th>
                                    <!-- Add more columns if needed -->
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @if(count($sections) < 1) 
                                <tr style="text-align: center;">
                                    <td colspan="3">Data not found.</td>
                                    </tr>
                                    @else
                                    <!-- foeach here  -->
                                    @foreach($sections as $section)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $section->class_name }}</td>
                                        <td>{{ $section->section_name }}</td>

                                    </tr>
                                    @endforeach
                                    @endif
                                    <tr id="empty-row" style="display: none;">
                                        <td colspan="5">No records found.</td>
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



// Assuming you have jQuery included
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tableBody = document.getElementById('table-body');
        var emptyRow = document.getElementById('empty-row');

        if (tableBody.rows.length === 0) {
            emptyRow.style.display = 'table-row';
        } else {
            emptyRow.style.display = 'none';
        }
    });
</script>