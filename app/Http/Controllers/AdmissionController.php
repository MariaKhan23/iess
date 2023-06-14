<?php

namespace App\Http\Controllers;

use App\Models\Addmission;
use App\Models\campus;
use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\Class_Section; 
use App\Models\StudentAddmission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class AdmissionController extends Controller 
{
    //Route for page Admissions
    public function admissions(Request $request){
        
        $pagename = "Addmissions"; 
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 

        $student_list = StudentAddmission::where('institute_id','=',$Institute_admin_id)->where('campus_id','=',$campus_id)->get(); 

        $campusName = $request->session()->get('campus_name'); 

       return view('institute_admin_panel.dashboard.Campus.generation_operation.addmission.addmissions',
       [
         'pagenaame' => $pagename,'student_list' => $student_list,
    
    ]); 

        
    } 

    // function for add student form page 
    public function add_Student(Request $request){
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
         
        $classes = CampusClass::where('institute_id', $Institute_admin_id)
                              ->where('campus_id', $campus_id)
                              ->get(); 
        //    $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();    
        $campusName = $request->session()->get('campus_name'); 


        $pagename = 'Add Student'; 
        return view('institute_admin_panel.dashboard.Campus.generation_operation.addmission.add_student',['Institute_admin_id' => $Institute_admin_id , 'campus_id' => $campus_id , 'classes' => $classes,'sections' => $sections,]);
    }

    // public function class_wise_section(Request $request)
    // {
      
    //     $data= Class_Section::where('class_name',$request->class_name)->get();
        

    //     // $output = '<option value=\"\">Tehsil</option>'; 
    //     $output = "";
    //     foreach($data as $list)
    //     { 
    //         $output .="
    //         <option value=\" ". $list->section_name ." \" >$list->section_name </option>
    //         ";
    //     }
    //     echo $output; 
    // }


    public function class_wise_section(Request $request)
{
    $data = Class_Section::where('class_name', $request->class_name)->pluck('section_name')->toArray();

    return response()->json($data);
}   


    // function for store student 
    public function store_student_admissions(Request $request)
    {

        $birth_certificate_img_for_db ="";
        $birth_certificate_img = $request->file('birth_certificate_img'); 
        if($birth_certificate_img != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($birth_certificate_img->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;
            
            $upload_location = 'campus/general_operations/birth_certificates/';
            $last_image_name = $upload_location.$image_name;
            $birth_certificate_img_for_db = $image_name;
            Image::make($birth_certificate_img)->resize(500, 500)->save($last_image_name);
        }
   

        $student_img_for_db ="";
        $student_img = $request->file('student_img'); 
        if($student_img != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($student_img->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;

            $upload_location = 'campus/general_operations/student_image/';
            $last_image_name = $upload_location.$image_name;
            $student_img_for_db = $image_name;
            Image::make($student_img)->resize(500, 500)->save($last_image_name);
        }


        $covid_certificate_img_for_db ="";
        $covid_certificate_img = $request->file('covid_certificate_img'); 
        if($covid_certificate_img != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($student_img->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;

            $upload_location = 'campus/general_operations/covid_certificate_image/';
            $last_image_name = $upload_location.$image_name;
            $covid_certificate_img_for_db = $image_name;
            Image::make($student_img)->resize(500, 500)->save($last_image_name);
        }


        $leaving_certificate_img_for_db ="";
        $leaving_certificate_img = $request->file('leaving_certificate_img'); 
        if($leaving_certificate_img != null)
        {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($student_img->getClientOriginalExtension());
            $image_name =   $name_generate.".".$image_extension;

            $upload_location = 'campus/general_operations/leaving_certificate_image/';
            $last_image_name = $upload_location.$image_name;
            $leaving_certificate_img_for_db = $image_name;
            Image::make($student_img)->resize(500, 500)->save($last_image_name);
        }

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

       StudentAddmission::create([
            'institute_id'            =>$Institute_admin_id,
            'campus_id'               =>$campus_id,
            'first_name'              =>$request->first_name,
            'last_name'               =>$request->last_name,
            'surname'                 =>$request->surname,
            'gender'                  =>$request->gender,
            'religion'                =>$request->religion,
            'birth_date'              =>$request->birth_date,
            'birth_certificate_img'   => $birth_certificate_img_for_db,
            'father_name'             =>$request->father_name,
            'contact'                 =>$request->contact,
            'Address'                 =>$request->Address,
            'enrollment_date'         =>$request->enrollment_date,
            'class_name'              =>$request->class_name,
            'section_name'            =>$request->section_name,
            'gr'                      =>$request->gr,
            'scholarship_percentage'  =>$request->scholarship_percentage,
            'student_img'             => $student_img_for_db,
            'covid_certificate_img'   => $covid_certificate_img_for_db,
            'last_school'             =>$request->last_school,
            'leaving_certificate_img' => $leaving_certificate_img_for_db,
            'parent_email'              =>$request->parent_email,
            'password'                =>$request->password,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('added', 'Student Added Successfully');
    } 
   
   
    public function view_student(Request $request, $id)
    {

        $pagename = 'view Student Detail';
        $view_student = StudentAddmission::Find($id);
        //ddd($request);
        // dd($id);
        return view('institute_admin_panel.dashboard.Campus.generation_operation.addmission.view_student_detail', [
            'pagename' => $pagename,
            'view_student' => $view_student,
        ]);
    }

public function edit_student(Request $request, $id)
    {
        $pagename = "Edit Student";
        

        $student_details = StudentAddmission::findOrFail($id);
        //dd($student_details);
        return view('institute_admin_panel.dashboard.Campus.generation_operation.addmission.edit_student_details', [
            'pagename' => $pagename,
            'student_details' => $student_details,
            
        ]);
    } 




 

public function update_edit_student(Request $request, $id)
    { 

        StudentAddmission::where('id', $id)->update([
            'first_name'              =>$request->first_name,
            'last_name'               =>$request->last_name,
            'surname'                 =>$request->surname,
            'gender'                  =>$request->gender,
            'religion'                =>$request->religion,
            'birth_date'              =>$request->birth_date,
            'birth_certificate_img'   =>$request->birth_certificate_img,
            'father_name'             =>$request->father_name,
            'contact'                 =>$request->contact,
            'Address'                 =>$request->Address,
            'enrollment_date'         =>$request->enrollment_date,
            'class_name'              =>$request->class_name,
            'section_name'            =>$request->section_name,
            'gr'                      =>$request->gr,
            'scholarship_percentage'  =>$request->scholarship_percentage,
            'student_img'             => $request->student_img,
            'covid_certificate_img'   => $request->covid_certificate_img,
            'last_school'             =>$request->last_school,
            'leaving_certificate_img' => $request->leaving_certificate_imgk,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Campus updated successsfully');
    }


    public function change_class(Request $request, $id){
        $change_class = StudentAddmission::findOrFail($id);
        $pagename = 'Change Class';

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
         
        $classes = CampusClass::where('institute_id', $Institute_admin_id)
                              ->where('campus_id', $campus_id)
                              ->get(); 



                              $sections = Class_Section::where('institute_id', $Institute_admin_id)
                              ->where('campus_id', $campus_id)
                              ->where('class_name', $change_class->class_name)
                              ->pluck('section_name')
                              ->toArray();

                              $campusName = $request->session()->get('campus_name'); 

        return view('institute_admin_panel.dashboard.Campus.generation_operation.addmission.change_student_class', [
            'pagename' => $pagename,
            'change_class' => $change_class,
            'classes' => $classes,
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'sections' => $sections,
        ]);
    } 


    public function update_class(Request $request, $id)
{
    $student = StudentAddmission::findOrFail($id);
    
    $student->class_name = $request->input('class_name');
    $student->section_name = $request->input('section_name');
    
    $student->save();
    
    return redirect()->back()->with('success', 'Class and section updated successfully.');
}


public function Back(Request $request){
    return redirect()->route('admissions');

}





}   




