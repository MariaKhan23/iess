<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\Class_Section;
use Illuminate\Http\Request;

class CampusSubjectController extends Controller
{

    //
    public function all_subjects(Request $request){

    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');
    // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 


    $subjects = CampusSubject::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->get();
        $campusName = $request->session()->get('campus_name'); 
        

return view('institute_admin_panel.dashboard.Campus.generation_operation.Subjects.all_subjects', [
    'subjects' => $subjects,
    // 'campuses' => $campuses,
    
]  
);

    }

  public function add_subject(Request $request){
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');
     
    $classes = CampusClass::where('institute_id', $Institute_admin_id)
                          ->where('campus_id', $campus_id)
                          ->get(); 

    $sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();  
    // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
    $campusName = $request->session()->get('campus_name');
    
        $pagename = 'Add Subject'; 

    return view('institute_admin_panel.dashboard.Campus.generation_operation.Subjects.add_subject',
    [
        'classes' => $classes,
        'sections' => $sections,
        'pagename' => $pagename, 
        'Institute_admin_id' => $Institute_admin_id,
        'campus_id' => $campus_id,
        // 'campuses' => $campuses,
       
    ]
);

  }

  


//   function for store subject 
public function store_campus_subject(Request $request){
    // dd($request);
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

       CampusSubject::create([
            'institute_id'            =>$Institute_admin_id,
            'campus_id'               =>$campus_id,
            'class_name'              =>$request->class_name,
            'section_name'            =>$request->section_name,
            'subject'                 =>$request->subject,
        ]);

        return redirect()->back()->with('SubjectAdded', 'Subject Added Successfully');
        

}



public function back_subjectlist(Request $request){
    return redirect()->route('all-subjects');

} 


}
