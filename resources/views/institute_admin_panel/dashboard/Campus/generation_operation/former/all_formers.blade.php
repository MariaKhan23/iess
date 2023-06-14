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

                 
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{ $pagename }}</h3>
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
                                    <th>Name</th>
                                    <th>Cadet Number</th>
                                    <!-- <th>Institute Id</th>
                                    <th>Campus Id</th> -->
                                    <th>Last Attendent</th>
                                    <th>Leaving Date</th>
                                    <!-- <th>Section</th> -->
                                    <th>action</th>

                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @php
                                $serialNumber = 1;
                                @endphp

                                @foreach($former as $former)
                                <tr>
                                   
                                    <td>

                                        {{ $serialNumber }}
                                    </td> 
                                   
                                    <td>{{ $former->first_name }}</td>
                                    <td>{{ $former->gr }}</td>
                                    <td>{{ $former->class_name }}</td>
                                    <td>{{ $former->updated_at->format('Y-m-d') }}</td>
                                    <td>
                                       
                                        <a href="{{ route('undo-former', ['id' => $former->id])  }}">
                                            <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Undo
                                            </button>
                                        </a>  
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
