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
                    <li>Classes</li>
                </ul>
            </div>
            <div class="row d-flex justify-content-end">
                <a href="{{ route('add-class') }}">
                    <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Add
                        Class</button>
                </a>
                <a href="{{ route('add-section') }}">
                    <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 14px">Add
                        Section</button>
                </a>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                 
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
                                    <!-- <th>Institute Id</th>
                                    <th>Campus Id</th> -->
                                    <th>Class Name</th>
                                    <th>Section</th>
                                    <th>Total Students</th>
                                    <th>actions</th>

                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @php
                                $serialNumber = 1;
                                @endphp

                                @foreach($all_classes as $class)
                                <tr>
                                   
                                    <td>

                                        {{ $serialNumber }}
                                    </td> 
                                   
                                    <td>{{ $class->class_name }}</td>
                                    <!-- <td>
                    @foreach ($sections[$class->class_name] as $section)
                        {{  $section   }}  ,
                       
                    @endforeach
                </td> -->
                                    <!-- <td>
                @if(count($sections[$class->class_name]) == 1)
                    {{ $sections[$class->class_name][0] }}
                @else
                    (
                    @foreach ($sections[$class->class_name] as $index => $section)
                        {{ $section }}
                        @if($index != count($sections[$class->class_name]) - 1)
                            ,
                        @endif  
                    @endforeach
                    )
                @endif
            </td> -->


                                    <!-- genuine  -->
                                    <!-- <td>
                @if(count($sections[$class->class_name]) == 0)
                    Empty
                @elseif(count($sections[$class->class_name]) == 1)
                    {{ $sections[$class->class_name][0] }}
                @else
                    (
                    @foreach ($sections[$class->class_name] as $index => $section)
                        {{ $section }}
                        @if($index != count($sections[$class->class_name]) - 1)
                            ,
                        @endif
                    @endforeach
                    )
                @endif
            </td>
 -->
                                    <!-- genuine  -->

                                    <td>
                                       
                                        <a href="{{ route('sections-view', ['class_id' => $class->id])  }}">
                                            <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Sections
                                            </button>
                                        </a>
                                    </td>   

                                    <td>{{ $studentCounts[$class->class_name] }}</td>
                                    {{-- <td>B</td> --}}

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href=""><i class="fas fa-redo-alt text-orange-peel"></i>View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="empty-row" style="display: none;">
                                    <td colspan="5">No records found.</td>
                                </tr>
                                @php
                                $serialNumber++;
                                @endphp
                                @endforeach
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