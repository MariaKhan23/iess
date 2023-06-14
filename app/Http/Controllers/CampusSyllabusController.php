<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\CampusSubject;
use App\Models\CampusSyllabus;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampusSyllabusController extends Controller
{
    public function all_syllabus(Request $request){
        
        
        // $all_syllabus = CampusClass::all();
        // Institute_admin_id
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $pagename = 'Syllabus';
        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
        // $Institute_admin_id = $request->session()->get('Institute_admin_id');
        // $campus_id = $request->session()->get('campus_id');
    
        $all_syllabus = CampusSyllabus::where('institute_id', $Institute_admin_id)
                                 ->where('campus_id', $campus_id)
                                 ->get();

                                 $campusName = $request->session()->get('campus_name'); 

        return view('institute_admin_panel.dashboard.Campus.generation_operation.Syllabus.all_syllabus' ,
        ['pagename' => $pagename,
        'all_syllabus' => $all_syllabus,
        // 'campuses' => $campuses 
          
        ]
    
    );
    }



    public function add_syllabus(Request $request){
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');



        $classes = CampusClass::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->get(); 

$sections = Class_Section::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get(); 

$subjects = CampusSubject::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->get();  

$campusName = $request->session()->get('campus_name'); 

$pagename = 'Add Syllabus'; 

return view('institute_admin_panel.dashboard.Campus.generation_operation.Syllabus.add_syllabus' ,
['pagename' => $pagename,
  'classes' => $classes,
  'sections' =>$sections,
  'subjects' =>$subjects,
  'Institute_admin_id'  =>$Institute_admin_id,
  'campus_id'  =>$campus_id,
  
]

);
    }



    // public function section_wise_subjects(Request $request)
    // {
    //     $dataa= CampusSubject::where('class_name',$request->class_name)->where('section_name',$request->section_name)->get();
        
    //     // $output = '<option value=\"\">Tehsil</option>'; 
    //     $output = "";
    //     foreach($dataa as $list)
    //     {
    //         $output .="
    //         <option value=\" ". $list->subject ." \" >$list->subject </option>
    //         ";
    //     }
    //     echo $output; 
    // }


    public function store_syllabus(Request $request){

        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusSyllabus::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            'section_name' => $request->section_name,
            'subject_name' => $request->subject_name,
            'author_name' => $request->author_name,
            'book_name' => $request->book_name,
            'no_of_chapters' => $request->no_of_chapters,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success-message-syllabus', 'Syllabus add successfully!');

    }
  

    // function for delete syllabus 
    public function delete_syllabus(Request $request,$id){
        $delete = CampusSyllabus::find($id)->delete();
        return redirect()->back()->with('delete-message-syllabus', 'Syllabus deleted successsfully');
    }


    public function edit_syllabus(Request $request, $id){

        
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');
        $pagename = 'Edit Syllabus';

        $SyllabusDetails = DB::table('campus_syllabi')->where('id', $id)->get()->first();

        
        $classes = CampusClass::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->get(); 



        return view('institute_admin_panel.dashboard.Campus.generation_operation.Syllabus.edit_syllabus',[   
            'SyllabusDetails' => $SyllabusDetails,
            'Institute_admin_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'classes' => $classes,
            'pagename' => $pagename,
    
    ]);
    }


public function save_edit_syllabus(Request $request, $id){
    
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');

    CampusSyllabus::where('id',$id)->update([
        'institute_id' => $Institute_admin_id,
        'campus_id' => $campus_id,
        'class_name' => $request->class_name,
        'section_name' => $request->section_name,
        'subject_name' => $request->subject_name,
        'author_name' => $request->author_name,
        'book_name' => $request->book_name,
        'no_of_chapters' => $request->no_of_chapters,
        'updated_at' => Carbon::now(),
    ]);    

    return redirect()->back()->with('success_update', 'Syllabus Updated Successfully');
}

 
}
