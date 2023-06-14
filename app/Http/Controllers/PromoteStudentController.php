<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\Class_Section;
use App\Models\StudentAddmission;
use Illuminate\Http\Request;

class PromoteStudentController extends Controller
{
    //
    public function pro_student(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();  

        $campusName = $request->session()->get('campus_name');

        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();
        return view('institute_admin_panel.dashboard.Campus.generation_operation.promote.pro_student',
            [
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,
                'classes' => $classes,
                'sections' => $sections,
                // 'campuses' => $campuses,
            ] 

        );
    }




    public function promotestudentClassData(Request $request)
    {
        // dd($request);
        //     $class_name = $request->input('class_name');
        // $section_name = $request->input('section_name');
        $selectedClass = $request->input('class_name');
        $selectedSection = $request->input('section_name');

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');


        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();  


        $classes = CampusClass::where('institute_id', $Institute_admin_id)
            ->where('campus_id', $campus_id)
            ->get();

        $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();

        $new = StudentAddmission::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->where('class_name', $selectedClass) 
        ->where('section_name', $selectedSection)  
        ->where(function ($query) {   
            $query->where('next_session_status', '!=', 'Leave')
                ->orWhereNull('next_session_status');
        })   
        ->get();    


        $campusName = $request->session()->get('campus_name');
        // dd($new); 

        return view('institute_admin_panel.dashboard.Campus.generation_operation.promote.pro_studentClassData',[
                'Institute_admin_id' => $Institute_admin_id,
                'campus_id' => $campus_id,  
                // 'campuses' => $campuses,
                'new' => $new,
                'classes' => $classes,
                'sections' => $sections,
                'selectedClass' => $selectedClass,
                'selectedSection' => $selectedSection,
            ]  
        );


       


    }


    // promote save 

    // public function SaveprostudentClassData(Request $request)
    // {
    // 
    // $Institute_admin_id = $request->session()->get('Institute_admin_id');
    // $campus_id = $request->session()->get('campus_id');
    // Retrieve the selected class and section from the form data
    // $class_name = $request->input('class_name');
    // $section_name = $request->input('section_name');

    // Retrieve the result status and next session status from the form data
    // $resultStatuses = $request->input('result_status');
    // $nextSessionStatuses = $request->input('next_session_status');

    // Update the records in the Students model  
    // foreach ($resultStatuses as $studentId => $resultStatus) {
    // $nextSessionStatus = $nextSessionStatuses[$studentId];

    // Find the student record
    // $student = StudentAddmission::where('class_name', $class_name)
    //     ->where('section_name', $section_name)
    //     ->where('id', $studentId)
    //     ->first();


    // $student = StudentAddmission::where('Institute_admin_id',$Institute_admin_id)->where('campus_id',$campus_id)->where('class_name', $class_name)
    // ->where('section_name', $section_name)
    // ->where('id', $studentId)
    // ->first();


    // if ($student) { 
    // Update the student record
    //         $student->result_status = $resultStatus;
    //         $student->next_session_status = $nextSessionStatus;
    //         $student->save();
    //     } 
    // } 

    // Redirect or return a response
    //     return redirect()->back()->with('success', 'Records updated successfully.');
    // }



    // public function SaveClassData(Request $request)
    // {
    //     $resultStatuses = $request->input('result_status');
    //     $nextSessionStatuses = $request->input('next_session_status');

    //     foreach ($resultStatuses as $studentId => $resultStatus) {
    //         $nextSessionStatus = $nextSessionStatuses[$studentId];

    //         // Update the student admission record
    //         $studentAdmission = StudentAddmission::find($studentId);
    //         $studentAdmission->result_status = $resultStatus;
    //         $studentAdmission->next_session_status = $nextSessionStatus;
    //         $studentAdmission->save();
    //     }

    //     return redirect()->back()->with('success', 'Records updated successfully');
    // }

// abc 

    // public function updatePromotedStudents(Request $request)
    // { 
    //     $previousSection = $request->input('previous_section');
       
    //     $previousClass = $request->input('previous_class');
        
    //     $className = $request->input('class_name');
    //     $sectionName = $request->input('section_name');
    //     $resultStatuses = $request->input('result_status');
    //     $nextSessionStatuses = $request->input('next_session_status');

    //     foreach ($resultStatuses as $studentId => $resultStatus) {
    //         $nextSessionStatus = $nextSessionStatuses[$studentId];

    //         StudentAddmission::where('id', $studentId)
    //             ->update([
    //                 'result_status' => $resultStatus,
    //                 'next_session_status' => $nextSessionStatus,
    //                 'class_name' => $className,  
    //                 'section_name' => $sectionName,
    //             ]);
    //     }    

    //     return redirect()->back()->with('success', 'Records Updated Successfully');
    // } 

    // abc end 


    public function updatePromotedStudents(Request $request)
{
    $previousSection = $request->input('previous_section');
    $previousClass = $request->input('previous_class');
    
    $resultStatuses = $request->input('result_status');
    $nextSessionStatuses = $request->input('next_session_status');

    foreach ($resultStatuses as $studentId => $resultStatus) {
        $nextSessionStatus = $nextSessionStatuses[$studentId];

        $className = $request->input('class_name');
        $sectionName = $request->input('section_name');

        
        if (empty($className)) {
            $className = $previousClass;
        }

       
        if (empty($sectionName)) {
            $sectionName = $previousSection;  
        }

        StudentAddmission::where('id', $studentId)
            ->update([
                'result_status' => $resultStatus,
                'next_session_status' => $nextSessionStatus,
                'class_name' => $className,
                'section_name' => $sectionName,
            ]);
    }    
 
    return redirect()->back()->with('success', 'Records Updated Successfully');
}


    public function former_student(Request $request)
    {
        $pagename = "All Formers"; 
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $campusName = $request->session()->get('campus_name'); 
        $former = StudentAddmission::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->where('next_session_status', '=', 'Leave')
        ->get();  
        return view('institute_admin_panel.dashboard.Campus.generation_operation.former.all_formers',
       [
         'pagename' => $pagename,'Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id,
         'campusName' => $campusName, 'former'=> $former
    
    ]); 
    }  


    public function undo_former(Request $request, $id){
        // dd($id);
        $former = StudentAddmission::find($id);
    if ($former) {
        $former->next_session_status = 'Continue';
        $former->save();
    }
}  

}
