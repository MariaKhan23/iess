<?php

namespace App\Http\Controllers;

use App\Models\CampusClass;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //function for view pge of add section 
    // public function add_section(Request $request)
    // {
    
    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $campus_id = $request->session()->get('campus_id'); 

    //     $pagename = 'Add Section';
    //     return view('institute_admin_panel.dashboard.Campus.generation_operation.classes.add_section', [
    //         'pagename' => $pagename,'Institute_admin_id' => $Institute_admin_id, 'campus_id' => $campus_id
    //     ]);
    // }


}
