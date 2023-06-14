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

            <div class="card height-auto">
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    

                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Promote Student</h3>
                        </div>
                    </div>

                    <div class="heading-layout1">
                        <div class="m-auto justify-content-center mt-4">
                            <p>Promote Students of <span class="font-weight-bold">{{ $selectedClass }}</span></p>
                        </div>
                    </div>  



                    <form id="promoteStudentForm" class="new-added-form" action="{{ route('updatePromotedStudents') }}" method="POST">
                        @csrf
                        <div class="row d-flex justify-content-center">

                         <input type="hidden" value="{{ $selectedSection }}" name="previous_section">
                         <input type="hidden" value=" {{ $selectedClass }} " name="previous_class">

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select name="class_name" class="form-control" id="select_class" aria-label="Default select example">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>0
                                    @endforeach
                                </select>  
                            </div>


                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Section *</label>
                                <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div>  




                        </div>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <!-- <th> -->
                                        <!-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll" />
                                                <label class="form-check-label">ID</label>
                                            </div> -->
                                        <!-- </th> -->
                                        <th>S.No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Cadet Number</th>
                                        <th>Result Status </th>
                                        <th>Next Session Status </th>


                                        <!-- <th>Section</th>
                                        <th>House</th>
                                        <th>Enrollment</th>
                                        <th>More</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($sections) < 1) <tr>
                                        <td colspan="3">Data not found.</td>
                                        </tr>
                                        @else
                                        @foreach ($new as $new)
                                        <tr>
                                            <!-- <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" />
                                                <label class="form-check-label">#123</label>
                                            </div>
                                        </td> -->
                                            <!-- <td class="text-center">
                                            <img src="/main_assets/img/figure/student2.png" alt="student" />
                                        </td> -->
                                            <!-- <td>{{ $new->id }}</td> -->
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $new->first_name }}</td>
                                            <td>{{ $new->last_name }}</td>
                                            <td>{{ $new->first_name }}</td>
                                            <td>
                                                <label>
                                                    <!-- <input type="radio" name="result_status" checked> -->
                                                    <input type="radio" name="result_status[{{ $new->id }}]" value="Pass" checked>

                                                    Pass
                                                </label>

                                                <label>
                                                    <!-- <input type="radio" name="result_status"> -->
                                                    <input type="radio" name="result_status[{{ $new->id }}]" value="Fail" checked>

                                                    Fail
                                                </label>

                                            </td>

                                            <td>
                                                <label>
                                                    <!-- <input type="radio" name="next_session_status" checked> -->
                                                    <input type="radio" name="next_session_status[{{ $new->id }}]" value="Continue" checked>

                                                    Continue
                                                </label>
                                                <label>
                                                    <!-- <input type="radio" name="next_session_status"> -->
                                                    <input type="radio" name="next_session_status[{{ $new->id }}]" value="Leave" checked>
                                                    leave
                                                </label>
                                            </td>
                                            <!-- <td>{{ $new->first_name }}</td> -->
                                            <!-- <td>house 242</td>
                                        <td>323</td> -->

                                        </tr>
                                        @endforeach
                                        @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mt-4 form-group">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
                                </button>
                            </div>
                        </div>

                        <!-- Parents Details -->


                    </form>

                </div>
                <!-- </form> -->


            </div>
        </div>
    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')


<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();
        $.ajax({
            url: '/class-wise-section',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },
            success: function(response) {
                $("#section_name_dropdown").empty();
                $("#section_name_dropdown").html(response);
            },
            error: function() {
                alert("Error: ");
            }
        });
    });
</script>




<!-- 
use App\Models\PromotedStudent;

public function storePromotedStudents(Request $request)
{
    $resultStatuses = $request->input('result_status');
    $nextSessionStatuses = $request->input('next_session_status');

    foreach ($resultStatuses as $studentId => $resultStatus) {
        $nextSessionStatus = $nextSessionStatuses[$studentId];

        // Create a new PromotedStudent instance and store the data
        $promotedStudent = new PromotedStudent();
        $promotedStudent->student_id = $studentId;
        $promotedStudent->result_status = $resultStatus;
        $promotedStudent->next_session_status = $nextSessionStatus;

        // Save the promoted student record
        $promotedStudent->save();
    }

    // Redirect or return a response
} -->

<script>
    $(document).ready(function() {
        $('#select_class').on('change', function() {
            var class_name = $(this).val();
            var selectedSection = $("#section_name_dropdown").val();

            $.ajax({
                url: '/class-wise-section',
                method: 'get',
                data: {
                    class_name: class_name,
                    _token: '{{csrf_token()}}'
                },
                success: function(response) {
                    $("#section_name_dropdown").html(response);

                    // Set the previously selected section if available
                    if (selectedSection) {
                        $("#section_name_dropdown").val(selectedSection);
                    }
                },
                error: function() {
                    alert("Error: ");
                }
            });
        });

        $('#promoteStudentForm').on('submit', function() {
            var selectedClass = $('#select_class').val();
            var selectedSection = $('#section_name_dropdown').val();

            // Set the selected class and section values in the hidden input fields
            $('[name="class_name"]').val(selectedClass);
            $('[name="section_name"]').val(selectedSection);
        });
    });
</script>