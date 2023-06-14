<?php

namespace App\Http\Controllers;

use App\Models\campus;
use App\Models\CampusClass;
use App\Models\Class_Section;
use App\Models\StudentAddmission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    // public function all_classes(Request $request)
    // {


    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    // $campus_id = $request->session()->get('campus_id');

    // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();

    // $all_classes = CampusClass::where('institute_id', $Institute_admin_id)
    // ->where('campus_id', $campus_id)
    // ->get();

    //     $pagename = 'View Classes';
        
    //     return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.all_classes', [
    //         'pagename' => $pagename,
    //         'all_classes' => $all_classes,
    //         'campuses' => $campuses,
    //     ]);
    // }


    public function all_classes(Request $request)
{

    
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');

    // $campuses = Campus::where('institute_id', $Institute_admin_id)
    //     ->where('id', $campus_id) 
    //     ->first();     

    $all_classes = CampusClass::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->get(); 

    $sections = [];
    foreach ($all_classes as $class) {
        $classSections = Class_Section::where('class_name', $class->class_name)
            ->where('campus_id', $campus_id)
            ->where('institute_id', $Institute_admin_id)
            ->pluck('section_name')
            ->toArray();
        $sections[$class->class_name] = $classSections;
    } 



  
    
// $students_counts = StudentAddmission::where('institute_id', $Institute_admin_id)->where('campus_id', $campus_id)->where('class_name', $class_name)->count();


$studentCounts = [];
    foreach ($all_classes as $class) {
        $studentCount = StudentAddmission::where('class_name', $class->class_name)
            ->where('campus_id', $campus_id)
            ->where('institute_id', $Institute_admin_id)
            ->count();
        $studentCounts[$class->class_name] = $studentCount;
    } 

   

    $campusName = $request->session()->get('campus_name');


    $pagename = 'View Classes';  

    return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.all_classes', [
        'pagename' => $pagename,
        'all_classes' => $all_classes,
        // 'campuses' => $campuses,   
        'sections' => $sections,
        'studentCounts' => $studentCounts,
    ]);
}


public function back_list(Request $request){
    return redirect()->route('all-classes');
}

    
    // old 
    public function add_class(Request $request)
    {
        $pagename = 'Add Class';
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');

        // $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
        $campusName = $request->session()->get('campus_name');
        return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.add_class', [
            'pagename' => $pagename,
            // 'campuses' => $campuses,
        ]);
    }





    public function store_class(Request $request)
    {
        // dd($request);
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        CampusClass::create([
            'institute_id' => $Institute_admin_id,
            'campus_id' => $campus_id,
            'class_name' => $request->class_name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success-message-class', 'Class add successfully!');
    }


//    abc 

public function add_section(Request $request)
{
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');
    
    $classes = CampusClass::where('institute_id', $Institute_admin_id)
                          ->where('campus_id', $campus_id)
                          ->get();
                        //   $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
              
                        $campusName = $request->session()->get('campus_name'); 
    $pagename = 'Add Section'; 
    
    return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.add_section', [
        'pagename' => $pagename,
        'Institute_admin_id' => $Institute_admin_id,
        'campus_id' => $campus_id,
        'classes' => $classes, 
        // 'campuses' => $campuses,
    ]);
} 
    


    
   

    // function for save data into databse of section 
    // public function store_section(Request $request){
    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $campus_id = $request->session()->get('campus_id');
    
    //     Class_Section::create([
    //         'institute_id' => $Institute_admin_id,
    //         'campus_id' => $campus_id,
    //         'class_name' => $request->input('class_name'),
    //         'created_at' => Carbon::now(),
    //         'updated_at' => Carbon::now(),
    //     ]);
    
    //     return redirect()->back()->with('success-message-section', 'Section added successfully!');
    // }


public function store_section(Request $request)
{
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');
    $class_name = $request->input('class_name');

    Class_Section::create([
        'institute_id' => $Institute_admin_id,
        'campus_id' => $campus_id,
        'class_name' => $class_name,
        'section_name' => $request->input('section_name'),  
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    return redirect()->back()->with('success-message-section', 'Section added successfully!');
    // return redirect()->route('route-name')->with('success', 'Message goes here');
//     @if(session('success'))
//     <div class="alert alert-success">
//         {{ session('success') }}
//     </div>
// @endif

}


public function back_section(Request $request){
    return redirect()->route('all-classes');

}


// public function sections_view(Request $request,$class_id){
 
//     $Institute_admin_id = $request->session()->get('Institute_admin_id');
//     $campus_id = $request->session()->get('campus_id');

//     $campuses = Campus::where('institute_id', $Institute_admin_id)
//         ->where('id', $campus_id) 
//         ->first();

//     $all_classes = CampusClass::where('institute_id', $Institute_admin_id)
//         ->where('campus_id', $campus_id)
//         ->get(); 


// }


public function sections(Request $request, $class_id)
{
    // dd($class_id);
    $Institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');


    $campusName = $request->session()->get('campus_name'); 

    $class = CampusClass::where('institute_id', $Institute_admin_id)
        ->where('campus_id', $campus_id)
        ->where('id', $class_id)
        ->first();

        // $all_sections = CampusClass::where('institute_id', $Institute_admin_id)
        // ->where('campus_id', $campus_id)->where('class_name',$class_id)
        // ->get(); 

        $sections = Class_Section::where('class_name', $class->class_name)
        ->where('campus_id', $campus_id)
        ->where('institute_id', $Institute_admin_id)
        ->get();
    dd($sections);



        // $sections = [];
        // foreach ($class as $class) {
        //     $classSections = Class_Section::where('class_name', $class->class_name)
        //         ->where('campus_id', $campus_id)
        //         ->where('institute_id', $Institute_admin_id)
        //         ->pluck('section_name')
        //         ->toArray();
        //     $sections[$class->class_name] = $classSections;
        // }
    

    // return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.sections_view', compact('class', 'sections'));
    return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.sections_view', [
        'class' => $class,
        // 'sections' => $sections, 
    ]);
}





public function sections_view(Request $request, $class_id)
{
    $institute_admin_id = $request->session()->get('Institute_admin_id');
    $campus_id = $request->session()->get('campus_id');
    $campusName = $request->session()->get('campus_name');

    $class = CampusClass::where('institute_id', $institute_admin_id)
        ->where('campus_id', $campus_id)
        ->where('id', $class_id)
        ->first();

    if ($class) {
        $sections = Class_Section::where('class_name', $class->class_name)
            ->where('campus_id', $campus_id)
            ->where('institute_id', $institute_admin_id)
            ->get();
    } else { 
        $sections = [];
    }  

    return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.sections_view', [
        'class' => $class,
        'sections' => $sections,
    ]);
}














}

