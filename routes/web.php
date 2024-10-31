<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Student\ProjectController;
use App\Http\Controllers\ProjectShowController;
use App\Http\Controllers\NewRequirements;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RequirementTwo;
use App\Http\Controllers\Faculty;
use App\Http\Controllers\Student\Defense;

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



Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Teacher Management__
Route::get('/add_teacher_view', [AdminController::class, 'addview']);
Route::post('/upload_teacher', [AdminController::class, 'upload']);
Route::post('/appointment', [HomeController::class, 'appointment'])->name('appointment.add');
Route::get('/myAppointment', [HomeController::class, 'myAppointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
Route::get('/show_appointment', [AdminController::class, 'show_appointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancel/{id}', [AdminController::class, 'cancel']);
Route::get('/show_teacher', [AdminController::class, 'show_teacher']);
Route::get('/delete_teacher/{id}', [AdminController::class, 'delete_teacher']);
Route::get('/update_teacher/{id}', [AdminController::class, 'update_teacher']);
Route::get('/update_teacher/{id}', [NewRequirements::class, 'teacherDetails'])->name('teacher.detail');
Route::post('/edit_teacher/{id}', [AdminController::class, 'edit_teacher']);

//__Research club__//
Route::get('/profile', [HomeController::class, 'show_profile']);
Route::get('/create_project', [HomeController::class, 'create_project']);
Route::get('/project_details', [HomeController::class, 'project_details']);
Route::get('/web_project', [HomeController::class, 'web_projects']);
Route::get('/mobile_application', [HomeController::class, 'mobile_applications']);
Route::get('/thesis', [HomeController::class, 'thesis']);
Route::post('/update/{id}', [HomeController::class, 'update']);
//__Profile control__//
Route::get('/edit_profile/{id}', [HomeController::class, 'edit_profile']);
Route::post('/update_profile/{id}', [HomeController::class, 'update_profile'])->name('update_profile');
Route::get('/find_teacher', [HomeController::class, 'find_teacher']);


//__All project route __//
Route::get('/addAndroid', [ProjectShowController::class, 'addAndroid'])->name('android.add');
Route::post('/upload_android', [ProjectShowController::class, 'upload_android']);
Route::get('/addWeb', [ProjectShowController::class, 'addWeb'])->name('web.add');
Route::post('/upload_web', [ProjectShowController::class, 'upload_website']);
Route::get('/addThesis', [ProjectShowController::class, 'addThesis'])->name('thesis.add');
Route::post('/upload_thesis', [ProjectShowController::class, 'upload_thesis'])->name('upload.thesis');


//new requirement routes
Route::get('/upload_files', [NewRequirements::class, 'uploadFiles'])->name('file.upload');
Route::get('/teacher_feedback', [NewRequirements::class, 'showFeedback'])->name('feedback.show');
Route::get('/teacher_login', [NewRequirements::class, 'teacherLogin'])->name('teacher.login');
Route::get('/supervised_project', [NewRequirements::class, 'supervised'])->name('supervised.project');
Route::get('/followup', [NewRequirements::class, 'followup'])->name('followup.show');
Route::get('/feedback', [NewRequirements::class, 'feedback'])->name('feedback');
Route::get('/faculty_profile', [NewRequirements::class, 'profile'])->name('faculty.profile');
Route::get('/All_Student', [AdminController::class, 'ShowStudent'])->name('student.show');
Route::get('/delete_Student/{id}', [AdminController::class, 'delete_student'])->name('student.delete');




//create team route
Route::get('/show_student', [TeamController::class, 'Show'])->name('member.show');
Route::get('/add_student', [AdminController::class, 'addStudent'])->name('student.add');
Route::get('/show_team', [TeamController::class, 'showTeam'])->name('team.show');
Route::post('/add_team', [TeamController::class, 'addToTeam'])->name('addToTeam');

// Add students
Route::post('/upload_student', [AdminController::class, 'uploadStudent'])->name('upload.student');

// Requirement two
Route::post('/file_upload', [RequirementTwo::class, 'fileUpload'])->name('fileUpload');
Route::post('/title_register', [RequirementTwo::class, 'titleRegister'])->name('title.register');
Route::get('/title_defense', [RequirementTwo::class, 'title_defense'])->name('title.defense');


//Faculty controller
Route::post('/followup', [Faculty::class, 'followup'])->name('followup');
Route::post('/feedback', [Faculty::class, 'feedback'])->name('feedback');
Route::get('/faculty_register', [Faculty::class, 'registerFaculty'])->name('faculty.register');
Route::get('/send_notifications', [Faculty::class, 'Send_Notification'])->name('send.notification');
Route::get('/show_marks', [Faculty::class, 'ShowMark'])->name('mark.show');
Route::post('/upload_notifications', [Faculty::class, 'upload_Notification'])->name('upload.notification');





Route::resource('project', ProjectController::class);


// Project Details

Route::get('/websiteDetails/{id}', [NewRequirements::class, 'WebsiteDetails'])->name('website.details');
Route::get('/thesisDetails/{id}', [NewRequirements::class, 'ThesisDetails'])->name('thesis.detail');
Route::get('/androidDetails/{id}', [NewRequirements::class, 'AndroidDetails'])->name('android.detail');


//Defense Route

Route::get('/title_defense_details', [Defense::class, 'title'])->name('title_defense.details');
Route::get('/pre_defense_details', [Defense::class, 'pre'])->name('pre_defense.details');
Route::get('/final_defense_details', [Defense::class, 'final'])->name('final_defense.details');
Route::get('/set_time', [Defense::class, 'schedule'])->name('schedule');

//file upload
Route::post('/titleDocuments', [Defense::class, 'upload_title_document'])->name('file.titleDoc');
Route::post('/preDefenseDocuments', [Defense::class, 'upload_preDefense_document'])->name('file.PreDefenseDoc');
Route::post('/finalDefenseDocuments', [Defense::class, 'upload_finalDefense_document'])->name('file.FinalDefenseDoc');


//Shedule for faculty
Route::post('/set_shedule', [Faculty::class, 'shedule'])->name('set.shedule');
