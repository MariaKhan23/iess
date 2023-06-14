<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\CampusTimetable;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampusTimeTableController extends Controller
{
    //
    public function view_timetable(Request $request){
        return view('institute_admin_panel.dashboard.Campus.generation_operation.Timetable.view_timeTable');
    }



public function add_timetable(Request $request){

    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');  
     
    $classes = CampusClass::where('institute_id', $Institute_admin_id)
                          ->where('campus_id', $campus_id)  
                          ->get(); 

    $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();  

    $subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();  
    
    $campusName = $request->session()->get('campus_name');
    
        $pagename = 'class Details'; 

    return view('institute_admin_panel.dashboard.Campus.generation_operation.Timetable.select-add-timetable-datail', ['Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id, 'classes' => $classes, 'sections' => $sections, 'campusName' => $campusName, 'subjects' => $subjects, 'pagename' => $pagename]);
} 



// public function section_wise_subjects(Request $request)
// {
//     $class_name = $request->input('class_name');
//     $section_name = $request->input('section_name');

//     // Fetch subjects based on the selected class and section
//     $subjects = CampusSubject::where('class_name', $class_name)
//                        ->where('section_name', $section_name)
//                        ->pluck('subject_name', 'id');

//     $options = '<option value="">Subject</option>';

//     foreach ($subjects as $id => $subject_name) {
//         $options .= '<option value="'.$id.'">'.$subject_name.'</option>';
//     }

//     return $options;  
// }

// new old 
// public function section_subjects(Request $request)
//     {
        
//         $data= CampusSubject::where('section_name',$request->section_name)->get(); 
        
//     return $data;  

// }  



// hihi 
// public function section_subjects(Request $request)
// {
//     $section_name = $request->section_name;
//     $data = CampusSubject::where('section_name', $section_name)->get();
//     return response()->json($data);
// }


// public function section_subjects(Request $request)
// {
//     $data = CampusSubject::where('section_name', $request->section_name)->pluck('subject_name')->toArray();

//     return response()->json($data);    
// }



public function section_subjects(Request $request)
{
    $section_name = $request->section_name;
    $class_name = $request->class_name;

    $data = CampusSubject::where('section_name', $section_name)
                         ->where('class_name', $class_name)
                         ->get();

    return response()->json($data);
}




// public function section_subjects(Request $request)
// {
//     $data = CampusSubject::where('section_name', $request->section_name)->pluck('subject_name')->toArray();

//     return response()->json($data);
// }   


public function new_timetable(Request $request){
// dd($request);
        $class = $request->input('class_name');
        $section = $request->input('section_name');
        $subject = $request->input('subject_name');

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');


        return view('institute_admin_panel.dashboard.Campus.generation_operation.Timetable.add-new-table', ['class' => $class , 'section' => $section, 'subject' => $subject, 'Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id]);  

}    

 public function save_timetable(Request $request){
 

 }


}   