<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CampusSubjectController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\InstitutesController;
use App\Http\Controllers\MainSuperAdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CampusSyllabusController;
use App\Http\Controllers\PromoteStudentController;
use App\Http\Controllers\CampusTimeTableController;
use App\Models\campus;
use App\Models\Institute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome'); 
// });

// Route::get('/', function () {
//     return view('institute_admin_panel.dashboard.index'); 
// });



Route::get('/Super-admin-login', [MainSuperAdminController::class, 'Super_admin_login'])->name('Super-admin-login');
Route::post('/super_admin_logged', [MainSuperAdminController::class, 'super_admin_logged'])->name('super_admin_logged');
Route::get('/logout', [MainSuperAdminController::class, 'logout'])->name('logout');

Route::get('/main-dashboard', [InstitutesController::class, 'main_dashboard'])->name('main-dashboard');
Route::get('/add-institute', [InstitutesController::class, 'add_institute'])->name('add-institute');
Route::post('/store-institute', [InstitutesController::class, 'store_institute'])->name('store-institute');
Route::get('/edit-institute/{edit}', [InstitutesController::class, 'edit_institute'])->name('edit-institute');
Route::post('/update-institute/{id}', [InstitutesController::class, 'update_institute'])->name('update-institute');
Route::get('/all-institute', [InstitutesController::class, 'all_institute'])->name('all-institute');
Route::get('/view-institute/{view}', [InstitutesController::class, 'view_institute'])->name('view-institute');
Route::get('/delete-institute/{delete}', [InstitutesController::class, 'delete_institute'])->name('delete-institute');
// new 
// Route::post('/update-user-status/{id}', [InstituteController::class,'updateUserStatus'])->name('update-user-status'); 
Route::post('/update-active-status/{id}', [InstitutesController::class, 'updateActiveStatus'])->name('update-active-status');

// new   

Route::get('/Insitute-login', [InstitutesController::class, 'Insitute_login'])->name('Insitute-login');
Route::post('/instituteLogged', [InstitutesController::class, 'instituteLogged'])->name('instituteLogged');
Route::get('/institute_Dashboard', [InstitutesController::class, 'institute_Dashboard'])->name('institute_Dashboard');
// new  
Route::get('/logout-insitute', [InstitutesController::class, 'logout_insitute'])->name('logout-insitute');
// new 
Route::get('/add-campus', [CampusController::class, 'add_campus'])->name('add-campus');
Route::get('open-dashboard', [InstitutesController::class, 'open_dashboard'])->name('open-dashboard');
Route::post('/store-campus', [CampusController::class, 'store_campus'])->name('store-campus');
Route::get('/all-Campuses', [CampusController::class, 'all_Campuses'])->name('all-Campuses');
Route::get('/edit-campus/{edit}', [CampusController::class, 'edit_campus'])->name('edit-campus');
Route::post('/save-edit-campus/{id}', [CampusController::class, 'save_edit_campus'])->name('save-edit-campus');
Route::get('/view-campus/{view}', [CampusController::class, 'view_campus'])->name('view-campus');
Route::get('/delete-campus/{delete}', [CampusController::class, 'delete_campus'])->name('delete-campus');
Route::get('/admin-my-profile', [MainSuperAdminController::class, 'admin_my_profile'])->name('admin-my-profile');
Route::get('/admin-account-settings', [MainSuperAdminController::class, 'admin_account_settings'])->name('admin-account-settings'); 
Route::post('/update-main-super-admin-settings/{id}', [MainSuperAdminController::class, 'update_main_super_admin_settings'])->name('update-main-super-admin-settings');
Route::get('/Institute-profile-view', [InstitutesController::class, 'Institute_profile_view'])->name('Institute-profile-view');
Route::get('/Institute-account-settings', [InstitutesController::class, 'Institute_account_settings'])->name('Institute-account-settings');
Route::post('/update-institute-settings/{id}', [InstitutesController::class, 'update_institute_settings'])->name('update-institute-settings');

Route::get('/campus-general-operation/{id}', [InstitutesController::class,'campus_general_operation'])->name('campus-general-operation'); 

Route::get('/back-list',[ClassController::class,'back_list'])->name('back-list');
Route::get('/all-classes', [ClassController::class, 'all_classes'])->name('all-classes');

Route::get('/sections-view/{class_id}', [ClassController::class, 'sections_view'])->name('sections-view');

Route::get('/add-class', [ClassController::class, 'add_class'])->name('add-class');
Route::post('/store-class', [ClassController::class, 'store_class'])->name('store-class');

// make section controller and change controller 
Route::get('/add-section', [ClassController::class, 'add_section'])->name('add-section');
Route::post('/store-section', [ClassController::class, 'store_section'])->name('store-section');
Route::get('/back-section',[ClassController::class,'back_section'])->name('back-section');
// make section controller and change controller 



Route::get('/campus-hr', [InstitutesController::class, 'campus_hr'])->name('campus-hr');
Route::get('/campus-exams', [InstitutesController::class, 'campus_exams'])->name('campus-exams');
Route::get('/campus-accounts', [InstitutesController::class, 'campus_accounts'])->name('campus-accounts');



// admission routes
Route::get('/admissions', [AdmissionController::class, 'admissions'])->name(
    'admissions'
); 
Route::get('/Back',[AdmissionController::class,'Back'])->name('Back');
Route::get('/add-Student', [AdmissionController::class, 'add_Student'])->name('add-Student');
Route::post('/store-student-admissions', [AdmissionController::class, 'store_student_admissions'])->name('store-student-admissions');
Route::get('/view-student/{id}', [AdmissionController::class, 'view_student',])->name('view-student');
Route::get('/edit-student/{id}', [AdmissionController::class, 'edit_student'])->name('edit-student');
Route::post('/update-edit-student/{id}', [AdmissionController::class, 'update_edit_student'])->name('update-edit-student');
Route::get('/change-class/{id}', [AdmissionController::class, 'change_class'])->name(
    'change-class'
);
Route::post('/update-class/{id}', [AdmissionController::class, 'update_class'])->name('update-class');


Route::get('/class-wise-section', [AdmissionController::class, 'class_wise_section'])->name('class-wise-section');
// Route::get('/section-wise-subjects', [CampusSyllabusController::class, 'section_wise_subjects'])->name('section-wise-subjects');

Route::post('/save-student', [AdmissionController::class, 'save_student'])->name('save-student');


Route::get('/view-attendance', [
    InstitutesController::class,
    'view_attendance',     
])->name('view-attendance'); 
    
// ? Promote Students
Route::get('/former-student', [PromoteStudentController::class,'former_student'])->name('former-student'); 
Route::get('/undo-former/{id}',[PromoteStudentController::class,'undo_former'])->name('undo-former');
Route::get('/pro-student', [PromoteStudentController::class, 'pro_student'])->name(
    'pro-student'  
);  
Route::get('/promotestudentClassData',[PromoteStudentController::class,'promotestudentClassData'])->name('promotestudentClassData');   

Route::post('/updatePromotedStudents', [PromoteStudentController::class, 'updatePromotedStudents'])->name('updatePromotedStudents');  

// ? My profile 
Route::get('/my-profile', [InstitutesController::class, 'my_profile'])->name(
    'my-profile'
);
Route::get('/acc-setting', [InstitutesController::class, 'acc_setting'])->name(
    'acc-setting'
);

//  subjects Routes
Route::get('/all-subjects', [CampusSubjectController::class,'all_subjects'])->name('all-subjects');

Route::get('/add-subject', [CampusSubjectController::class, 'add_subject'])->name('add-subject');
Route::post('/store-campus-subject',[CampusSubjectController::class,'store_campus_subject'])->name('store-campus-subject');
Route::get('/back-subjectlist',[CampusSubjectController::class,'back_subjectlist'])->name('back-subjectlist');

// routes for time table 
Route::get('/view-timetable',[CampusTimeTableController::class,'view_timetable'])->name('view-timetable');
Route::get('/add-timetable',[CampusTimeTableController::class,'add_timetable'])->name('add-timetable');
Route::get('/section-subjects', [CampusTimeTableController::class,'section_subjects'])->name('section-subjects');
Route::post('/new-timetable', [CampusTimeTableController::class,'new_timetable'])->name('new-timetable');

Route::post('/save-timetable',[CampusTimeTableController::class,'save_timetable'])->name('save-timetable');
// ? syllabus  
Route::get('/all-syllabus', [CampusSyllabusController::class,'all_syllabus'])->name('all-syllabus');
Route::get('/add-syllabus',[CampusSyllabusController::class,'add_syllabus'])->name('add-syllabus');
Route::post('/store-syllabus',[CampusSyllabusController::class,'store_syllabus'])->name('store-syllabus');
Route::get('/delete-syllabus/{id}',[CampusSyllabusController::class,'delete_syllabus'])->name('delete-syllabus');
Route::get('/edit-syllabus/{id}',[CampusSyllabusController::class,'edit_syllabus'])->name('edit-syllabus');
Route::post('/save-edit-syllabus/{id}',[CampusSyllabusController::class,'save_edit_syllabus'])->name('save-edit-syllabus');

//_Route::get('/add-syllabus', [
//     InstitutesController::class,
//     'add_syllabus',  
// ])->name('add-syllabus'); 
// former student

//General Operation End

// Digital Library
Route::get('/digital-library', [
    InstitutesController::class,   
    'digital_library',
])->name('digital-library');
Route::get('/add-new-category', [
    InstitutesController::class,
    'add_new_category',
])->name('add-new-category');
Route::get('/all-books', [InstitutesController::class, 'all_books'])->name(
    'all-books'
);
Route::get('/add-new-book', [
    InstitutesController::class,
    'add_new_book',
])->name('add-new-book');
Route::get('/book-reservation', [
    InstitutesController::class,
    'book_reservation',
])->name('book-reservation');
Route::get('/new-reservation', [
    InstitutesController::class,
    'new_reservation',
])->name('new-reservation');
Route::get('/return-book', [
    InstitutesController::class,
    'returned_book',
])->name('return-book');
Route::get('/book-renewal', [
    InstitutesController::class,
    'book_renewal',
])->name('book-renewal');
Route::get('/all-fine', [InstitutesController::class, 'all_fine'])->name(
    'all-fine'
);
Route::get('/add-new-fine', [
    InstitutesController::class,
    'add_new_fine',
])->name('add-new-fine');
Route::get('/supplier-profile', [
    InstitutesController::class,
    'supplier_profile',
])->name('supplier-profile');
Route::get('/add-new-supplier', [
    InstitutesController::class,
    'add_new_supplier',
])->name('add-new-supplier');
