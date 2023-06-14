<?php

namespace App\Http\Controllers;

use App\Models\campus;
use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\MainSuperAdmin;
use App\Models\User;
use App\Models\Class_Section;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InstitutesController extends Controller
{
    public function main_dashboard(Request $request)
    {
        $institutes = Institute::with('campuses')->get();
        // ddd($request);
        $count = Institute::count();
        $all = campus::count();
        $pagename = 'Dashboard';
        // $admin = MainSuperAdmin::all();
        return view('main_super_admin.dashboard.index', [
            'pagename' => $pagename,
            'count' => $count,
            'all' => $all, 
            'institutes' => $institutes,
        ]);
    }

    public function add_institute(Request $request)
    {
        $pagename = 'Add Institute';
        return view('main_super_admin.dashboard.institutes.institutes_form', [
            'pagename' => $pagename,
        ]);
    }

    public function edit_institute($edit)
    {
        $pagename = "Edit Institute";
        $institutedetails = DB::table('institutes')->where('id', $edit)->get()->first();

        return view('main_super_admin.dashboard.institutes.institutes_edit_form', [
            'pagename' => $pagename,
            'institutedetails' => $institutedetails,
        ]);
    }

    public function store_institute(Request $request)
    {
        // dd($request); 
        $institute = Institute::create([
            'institute_name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'institute_email' => $request->institute_email,
            'institute_password' => $request->institute_password,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user = User::create([
            'name'  => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'email' => $request->institute_email,
            'password' => $request->institute_password, 
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'who_is_login' => 'Institute'
        ]);
        // add 
        $institute_username = Str::slug($request->institute_name) . $user->id;
        Institute::where('id', $institute->id)->update([
            'Institute_username' => $institute_username,
        ]);
        User::where('id', $user->id)->update([
            'username' => $institute_username,
        ]);
        // add 
        return Redirect()
            ->back()
            ->with(
                'success-message-Institute',
                'Institute is successfully Registered!'
            );
    }

    public function update_institute(Request $request, $id)
    {
        Institute::where('id', $id)->update([
            'institute_name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'institute_email' => $request->institute_email,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'updated_at' => Carbon::now(),
        ]);

        User::where('id', $id)->update([
            'name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'email' => $request->institute_email,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success-message-update', 'Institute is successfully Update!');
    }
    public function all_institute(Request $request)
    {
        $pagename = 'All Institute';
        $registered_institutes = Institute::all();
        // dd($registered_institutes);
        return view('main_super_admin.dashboard.institutes.all_institutes', [
            'pagename' => $pagename,
            'registered_institutes' => $registered_institutes,
        ]);
    }
    public function view_institute($view)
    {
        $pagename = 'View Institute';
        $view_institutes = Institute::find($view);
        // dd($view_institutes);
        return view('main_super_admin.dashboard.institutes.institutes_detail', [
            'pagename' => $pagename,
            'view_institutes' => $view_institutes,
        ]);
    }
   

    public function delete_institute($delete)
    {
        $res = Institute::find($delete)->delete();
        return Redirect()
            ->back()
            ->with(
                'delete-message-Institute',
                'Institute is deleted successfully!'
            ); 
    }  

    
        public function updateUserStatus(Request $request)
        {
            $userId = $request->input('user_id');
            
            $user = User::find($userId);
            if ($user) {
                $user->active_status = 0;
                $user->save(); 
                
                return response()->json(['success' => true]);
            }
            
            return response()->json(['success' => false]);
        }
    


    // function for view login page of insitute 
    public function Insitute_login(Request $request)
    {
        return view('main_super_admin.dashboard.institutes.Insitute_login');
    }

    // function for logged insitute 

    public function instituteLogged(Request $request)
    {
        $count = Institute::where('Institute_email', '=', $request->Institute_email)->where('institute_password', '=', $request->Institute_password)->count();
        if ($count < 1) { 
            // return Redirect()->back()->with('message', 'Wrong Credentials');
            return redirect()->back()->with('alert', [
                'type' => 'danger',
                'message' => 'Invalid email or password.' 
            ]);
        } else {

            $user = Institute::where('Institute_email', '=', $request->Institute_email)->where('institute_password', '=', $request->Institute_password)->first();

            // if ($user->active_status == 1) {   
            //     return redirect()->back()->with('alert', [
            //         'type' => 'danger',
            //         'message' => 'You are not allowed to login.' 
            //     ]);  
            // }

            $request->session()->put('Institute_admin_id', $user->id);
            $request->session()->put('Institute_username', $user->Institute_username);
            $request->session()->put('Institute_email', $user->institute_email);
            $request->session()->put('Institute_admin_password', $user->institute_password);
            // dd($request); 
            return Redirect()->route('institute_Dashboard');
        } 
    }

    // function for opening Institute Dashboard page 
    public function institute_Dashboard(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $all_campuses_fr_side = campus::where('institute_id', $Institute_admin_id)->get();
        $request->session()->put('all_campuses_fr_side', $all_campuses_fr_side);
$pagename = 'institute';
        // dd($request);
        return view('main_super_admin.dashboard.institutes.institute_Dashboard',['Institute_admin_id' => $Institute_admin_id , 'all_campuses_fr_side' => $all_campuses_fr_side, 'request' => $request,'pagename' => $pagename]);
    }

    // function for view Institute-profile from navbar 
    public function Institute_profile_view(Request $request)
    {

        $sa_id = $request->session()->get('Institute_admin_id');

        $InstituteData = DB::table('institutes')->where('id', $sa_id)->first();

        return view('institute_admin_panel.dashboard.Campus.Institute_profile',  ['InstituteData' => $InstituteData]);
    }

    // function for settings of institute view 
    public function Institute_account_settings(Request $request)
    {
       
        $sa_id = $request->session()->get('Institute_admin_id');

        $Data = DB::table('institutes')->where('id', $sa_id)->first();

        return view('institute_admin_panel.dashboard.Campus.institute_profile_settings', ['Data' => $Data]);
    }


    // function for update profile settings update of Institutes 
    public function update_institute_settings(Request $request, $id)
    {

        $sa_id = $request->session()->get('Institute_admin_id');

        $old_password            = $request->old_password;
        $new_password            = $request->new_password;
        $retype_password         = $request->retype_password;

        $sa_id_data = Institute::where('id', '=', $sa_id)->first(); 

        if($old_password != $sa_id_data->institute_password)
        {
            return Redirect()->back()->with('dont-match', 'Old password is not correct');
        }else{
            if($new_password === $retype_password)
            {


        //    ddd($request); 
        Institute::where('id', $id)->update([
            'institute_name' => $request->institute_name,
            'Institute_username' => $request->Institute_username,
            'Institute_address' => $request->Institute_address,
            'institute_password' => $request->new_password,
            'institute_city' => $request->institute_city,
            'institute_email' => $request->institute_email,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'updated_at' => Carbon::now(),
        ]); 

        return Redirect()->back()->with('success-message-update', 'Institute Details is successfully Update!');
    }else
    {
        return Redirect()->back()->with('failed', 'Pasword not match ! Both passwords must  same ');
    }
}
    }



    //   public function  logout_insitute
    public function logout_insitute(Request $request)
    {
        
        
        $request->session()->forget(['Institute_admin_id','Institute_username','Institute_admin_password']); 
        $request->session()->flush(); 

        echo '<script> 
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };  
    </script>'; 
        // return Redirect()->route('Super-admin-login');
        return Redirect()->route('Insitute-login');

    }

    // public function campus_general_operation(Request $request, $id)
    // {  
       
    //     $pagename = 'General Operation';
      
    //     $Institute_admin_id = $request->session()->get('Institute_admin_id');
    //     $request->session()->put('campus_id', $id);
    //     $Institute_admin_email = $request->session()->get('Institute_email');
    //     // $campusName = $request->session()->get('campus_name');

    //     $campus_id = $request->session()->get('campus_id');
    //     dd($campus_id);
    //     $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first(); 
       
    
    //     return view('institute_admin_panel.dashboard.Campus.generation_operation.general_operation', [
    //         'pagename' => $pagename,
    //         'campuses' => $campuses, 
    //         'Institute_admin_email' => $Institute_admin_email,
    //         'Institute_admin_id' => $Institute_admin_id,
    //         // 'campusName' => $campusName,
    //         'campus_id' => $campus_id,

    //     ]);
    // }   

    public function campus_general_operation(Request $request, $id)
    {
        $pagename = 'General Operation';
    
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $request->session()->put('campus_id', $id);
        $Institute_admin_email = $request->session()->get('Institute_email');
    
        $campus_id = $request->session()->get('campus_id');
        
        $campus = DB::table('campuses')
            ->where('institute_id', $Institute_admin_id)
            ->where('id', $campus_id)
            ->select('campus_name')
            ->first();   
    
        if ($campus) { 
            $campusName = $campus->campus_name;
        } else { 
            $campusName = null;
        }  
        // dd($campusName); 
        $request->session()->put('campus_name', $campusName);
       


        return view('institute_admin_panel.dashboard.Campus.generation_operation.general_operation', [
            'pagename' => $pagename,
            'campuses' => $campus,  
            'Institute_admin_em ail' => $Institute_admin_email,
            'Institute_admin_id' => $Institute_admin_id,
            'campusName' => $campusName,
            'campus_id' => $campus_id,
            
        ]);
    }  
    















//     public function campus_general_operation(Request $request, $id)
// {
//     $pagename = 'General Operation';
//     $request->session()->put('campus_id', $id);
//     $Institute_admin_id = $request->session()->get('Institute_email');

//     $campus_id = $request->session()->get('campus_id');
//     $campuses = campus::where('institute_id', '=', $Institute_admin_id)->where('id', '=', $campus_id)->first();

//     if ($campuses) {
//         return view('institute_admin_panel.dashboard.Campus.generation_operation.general_operation', [
//             'pagename' => $pagename,
//             'campuses' => $campuses,
//         ]);
//     } else {
       
//         return redirect()->back()->with('message', 'Invalid campus');
//     }
// }




    public function campus_hr(Request $request)
    {
        $pagename = 'HR';
        return view('institute_admin_panel.dashboard.campus.campus_hr', [
            'pagename' => $pagename,
        ]);
       
    }
    public function campus_exams(Request $request)
    {
        $pagename = 'HR';
        return view('institute_admin_panel.dashboard.campus.campus_exams', [
            'pagename' => $pagename,
        ]);
    }
    public function campus_accounts(Request $request)
    {
        $pagename = 'Accounts';
        return view('institute_admin_panel.dashboard.campus.campus_accounts', [
            'pagename' => $pagename,
        ]);
    }






public function updateActiveStatus(Request $request, $id)
{
  
      $item = User::findOrFail($id);
      $item->active_status = 1; 
      $item->save();

      return response()->json(['success' => true, 'message' => 'Item updated successfully']);
} 
  
    
       
} 