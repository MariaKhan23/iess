<?php

namespace App\Http\Controllers;

use App\Models\MainSuperAdmin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainSuperAdminController extends Controller
{


    // function for view login page for admin 

    public function Super_admin_login(Request $request){
        return view('login');
    }
 
    // function for view login page for admin end


    // function for main_admin_login 

    public function super_admin_logged(Request $request)
    {
        
        $count = MainSuperAdmin::where('admin_username', '=', $request->username)->where('admin_password', '=', $request->password)->count(); 
        if($count < 1) 
        {
            // return Redirect()->back()->with('message', 'Wrong Credentials');
            return redirect()->back()->with('alert', [
                'type' => 'danger',
                'message' => 'Invalid username or password.'
            ]); 
         
            
        }else{ 

            $user = MainSuperAdmin::where('admin_username', '=', $request->username)->where('admin_password', '=', $request->password)->first();
           
            $request->session()->put('Main_super_admin_id', $user->id);
            $request->session()->put('Main_super_admin_username', $user->admin_username);
            $request->session()->put('Main_super_admin_password', $user->admin_password);
            $request->session()->put('Main_super_admin_email', $user->admin_email);
            return redirect()->route('main-dashboard');
        } 

    }

    // function for main_admin_login end


 
// function for Main_admin_logout
public function logout(Request $request)
{
    // $request->session()->forget(['admin_name','admin_username','who_is_login','admin_email','super_admin_id', 'user_id', 'user_district','user_tehsil','user_area','user_uc','is_view_given','is_edit_given','is_delete_given']); 
    // $request->session()->flush(); 
    
    $request->session()->forget(['Main_super_admin_id','Main_super_admin_username','Main_super_admin_password']); 
    $request->session()->flush(); 

    echo '<script> 
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.go(1);
    };  
  </script>'; 
    return Redirect()->route('Super-admin-login');
}
// function for Main_admin_logout end 


public function admin_my_profile(Request $request)
{
    $sa_id = $request->session()->get('Main_super_admin_id');

    $userData = DB::table('main_super_admins')->where('id', $sa_id)->first();

    return view('main_super_admin.dashboard.institutes.admin_profile', ['userData' => $userData]);
} 


// function for admin profile settings page 
public function admin_account_settings(Request $request){ 

    $sa_id = $request->session()->get('Main_super_admin_id');
    $userData = DB::table('main_super_admins')->where('id', $sa_id)->first();

    return view('main_super_admin.dashboard.institutes.admin_profile_settings', ['userData' => $userData]);

} 

// function for admin profile settings update 
public function update_main_super_admin_settings(Request $request, $id){

    $sa_id = $request->session()->get('Main_super_admin_id');
    $old_password            = $request->old_password;
    $new_password            = $request->new_password;
    $retype_password         = $request->retype_password;

    $sa_id_data = MainSuperAdmin::where('id', '=', $sa_id)->first(); 

    if($old_password != $sa_id_data->admin_password)
    {
        return Redirect()->back()->with('old-pass', 'Old password is not correct');
    }else{
        if($new_password === $retype_password)
        {


    MainSuperAdmin::where('id', $id)->update([
        'admin_name' => $request->admin_name,
        'admin_number' => $request->admin_number,
        'admin_username' => $request->admin_username,
        'admin_email' => $request->admin_email,
        'admin_password' => $request->new_password,
        'updated_at' => Carbon::now(), 
    ]);
    return Redirect()->back()->with('success-message-update', 'Admin Details is successfully Update!');



}else
{
    return Redirect()->back()->with('dont-match', 'Pasword not match ! Both passwords must  same ');
}

}

}  

}





