<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\doctor_controller;
use App\Http\Controllers\citie_controller;
use App\Http\Controllers\specialist_controller;
use App\Http\Controllers\state_controller;
use App\Http\Controllers\companie_controller;
use App\Http\Controllers\manager_controller;
use App\Http\Controllers\mr_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\stockiest_controller;
use App\Http\Controllers\service_controller;
use App\Http\Controllers\drspecialitie_controller;

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

Route::get('/', function (){return view('patient.index');});
Route::get('/index', function (){return view('patient.index');});
Route::get('/about', function (){return view('patient.about');});
Route::get('/contact', function (){return view('patient.contact');});
Route::get('/index', function (){return view('patient.index');});
Route::get('/login', function (){return view('patient.login');});
Route::get('/register', function (){return view('patient.register');});
Route::get('/patient-dashboard', function (){return view('patient.patient-dashboard');});

//Route::get('/search', function (){return view('patient.search');});
Route::get('/favourites', function (){return view('patient.favourites');});
//Route::get('/doctor-profile', function (){return view('patient.doctor-profile');});
Route::get('/booking', function (){return view('patient.booking');});
Route::get('/checkout', function (){return view('patient.checkout');});
Route::get('/booking-success', function (){return view('patient.booking-success');});
Route::get('/prescription', function (){return view('patient.prescription');});
Route::get('/prescription-view', function (){return view('patient.prescription-view');});
Route::get('/profile-settings', function (){return view('patient.profile-settings');});
Route::get('/change-password', function (){return view('patient.change-password');});
Route::get('/forgot-password', function (){return view('patient.forgot-password');});

Route::get('/search',[doctor_controller::class,'doctorlist']);
Route::get('/doctor-profile/{id}',[doctor_controller::class,'doctorview']);


Route::get('/chat', function (){return view('patient.chat');});
Route::get('/voice-call', function (){return view('patient.voice-call');});
Route::get('/video-call', function (){return view('patient.video-call');});

Route::get('reviews', function (){return view('patient.reviews');});
Route::get('calendar', function (){return view('patient.calendar');});
Route::get('components', function (){return view('patient.components');});

//===========================================================================================================
Route::get('/doctor',[doctor_controller::class,'login'])->middleware('doctorbeforelogin');
Route::post('/doctorlogin',[doctor_controller::class,'doctorlogin']);
Route::get('/doctorlogout',[doctor_controller::class,'doctorlogout']);

//Route::get('/doctor', function (){return view('doctor.login');});

Route::group(['middleware'=>['doctorafterlogin']], function(){

Route::get('/doctor-change-password', function (){return view('doctor.change-password');});
Route::get('/doctor-forgot-password', function (){return view('doctor.forgot-password');});

Route::get('/doctor-dashboard', function (){return view('doctor.doctor-dashboard');});
Route::get('/editdoctor',[doctor_controller::class,'editdoctor']);
Route::post('/editdoctor/{doctor_id}',[doctor_controller::class,'updatedoctor']);
//Route::get('/doctor-profile-settings', function (){return view('doctor.doctor-profile-settings');});
Route::get('/doctor-social-media', function (){return view('doctor.social-media');});

//Route::get('/doctor-service-specialization', function (){return view('doctor.add-service-specialization');});
Route::get('/doctor-service-specialization',[service_controller::class,'create']);
Route::post('/addservice',[service_controller::class,'addservice']);
Route::get('/doctor-service-specialization',[service_controller::class,'index']);

//Route::get('/addspeciality',[drspecialitie_controller::class,'addspeciality']);
Route::post('/addspecialitie',[service_controller::class,'addspecialitie']);


Route::get('/doctor-my-patients', function (){return view('doctor.my-patients');});
Route::get('/doctor-patient-profile', function (){return view('doctor.patient-profile');});

Route::get('/doctor-appointments', function (){return view('doctor.appointments');});
Route::get('/doctor-patient-schedule-timings', function (){return view('doctor.patient-schedule-timings');});
Route::get('/doctor-my-medicine', function (){return view('doctor.my-medicine');});


Route::get('/doctor-mr-dashboard', function (){return view('doctor.mr-dashboard');});
Route::get('/doctor-mr-schedule-timings', function (){return view('doctor.mr-schedule-timings');});
Route::get('/doctor-mr-appointments', function (){return view('doctor.mr-appointments');});
Route::get('/doctor-mr-find', function (){return view('doctor.mr-find');});


Route::get('/doctor-manager-dashboard', function (){return view('doctor.manager-dashboard');});
Route::get('/doctor-manager-schedule-timings', function (){return view('doctor.manager-schedule-timings');});
Route::get('/doctor-manager-appointments', function (){return view('doctor.manager-appointments');});
Route::get('/doctor-manager-find', function (){return view('doctor.manager-find');});

Route::get('/doctor-company-dashboard', function (){return view('doctor.company-dashboard');});
Route::get('/doctor-company-schedule-timings', function (){return view('doctor.company-schedule-timings');});
Route::get('/doctor-company-appointments', function (){return view('doctor.company-appointments');});
Route::get('/doctor-company-find', function (){return view('doctor.company-find');});



Route::get('/doctor-chat-doctor', function (){return view('doctor.chat-doctor');});
Route::get('/doctor-invoices', function (){return view('doctor.invoices');});
Route::get('/doctor-reviews', function (){return view('doctor.reviews');});
Route::get('/doctor-calendar', function (){return view('doctor.calendar');});
Route::get('/doctor-components', function (){return view('doctor.components');});
Route::get('/doctor-invoice-view', function (){return view('doctor.invoice-view');});
Route::get('/doctor-blank-page', function (){return view('doctor.blank-page');});

});
//===========================================================================================================

Route::get('/admin-login',[admin_controller::class,'login']);
Route::post('/adminlogin',[admin_controller::class,'adminlogin']);
Route::get('/logout',[admin_controller::class,'logout']);

Route::group(['middleware'=>['afterlogin']], function(){

Route::get('/admin', function (){return view('admin.index');});
Route::get('/admin-profile',[admin_controller::class,'myaccount']);
//Route::get('/editadmin/{id}',[admin_controller::class,'editadmin']);//edit
//Route::post('/editadmin/{id}',[admin_controller::class,'update']);//update
//Route::get('/admin-settings', function (){return view('admin.settings');});
Route::get('/admin-profile',[admin_controller::class,'profile']);
Route::get('/editadmin/{id}',[admin_controller::class,'editadmin']);
Route::post('/admin-profile/{id}',[admin_controller::class,'update']);


Route::get('/admin-specialities',[specialist_controller::class,'index']);
Route::get('/admin-add-specialities',[specialist_controller::class,'create']);
Route::post('/admin-add-specialities',[specialist_controller::class,'store']);
Route::get('/edit-specialist/{id}',[specialist_controller::class,'edit']);
Route::post('/edit-specialist/{id}',[specialist_controller::class,'update']);
Route::get('/admin-add-specialities/{id}',[specialist_controller::class,'destroy']); 
//
Route::get('/admin-patient', function (){return view('admin.patient-list');});
Route::get('/admin-patient-appointment', function (){return view('admin.patient-appointment');});
Route::get('/admin-patient-cancel-appointment', function (){return view('admin.patient-cancel-appointment');});

Route::get('/edit/{id}',[doctor_controller::class,'edit']);
Route::post('/edit/{id}',[doctor_controller::class,'update']);
Route::get('/admin-doctor',[doctor_controller::class,'index']);
Route::get('/admin-add-doctor',[doctor_controller::class,'create']);
Route::post('/admin-add-doctor',[doctor_controller::class,'store']);
Route::get('/admin-add-doctor/{id}',[doctor_controller::class,'destroy']); 
Route::get('/admin-doctor-appointment', function (){return view('admin.doctor-appointment');});
Route::get('/admin-doctor-cancel-appointment', function (){return view('admin.doctor-cancel-appointment');});

Route::get('/admin-add-company',[companie_controller::class,'create']);
Route::post('/admin-add-company',[companie_controller::class,'store']);
Route::get('/admin-company',[companie_controller::class,'index']);
Route::get('/edit-company/{id}',[companie_controller::class,'edit']);
Route::post('/edit-company/{id}',[companie_controller::class,'update']);
Route::get('/admin-add-company/{id}',[companie_controller::class,'destroy']); 
Route::get('/admin-company-appointment', function (){return view('admin.company-appointment');});
Route::get('/admin-company-cancel-appointment', function (){return view('admin.company-cancel-appointment');});

Route::get('/admin-add-manager',[manager_controller::class,'create']);
Route::post('/admin-add-manager',[manager_controller::class,'store']);
Route::get('/admin-manager',[manager_controller::class,'index']);
Route::get('/edit-manager/{id}',[manager_controller::class,'edit']);
Route::post('/edit-manager/{id}',[manager_controller::class,'update']);
Route::get('/admin-add-manager/{id}',[manager_controller::class,'destroy']); 
Route::get('/admin-manager-appointment', function (){return view('admin.manager-appointment');});
Route::get('/admin-manager-cancel-appointment', function (){return view('admin.manager-cancel-appointment');});

Route::get('/admin-add-mr',[mr_controller::class,'create']);
Route::post('/admin-add-mr',[mr_controller::class,'store']);
Route::get('/admin-mr',[mr_controller::class,'index']);
Route::get('/edit-mr/{id}',[mr_controller::class,'edit']);
Route::post('/edit-mr/{id}',[mr_controller::class,'update']);
Route::get('/admin-add-mr/{id}',[mr_controller::class,'destroy']); 
Route::get('/admin-mr-appointment', function (){return view('admin.mr-appointment');});
Route::get('/admin-mr-cancel-appointment', function (){return view('admin.mr-cancel-appointment');});

Route::get('/admin-stockiest',[stockiest_controller::class,'index']);

Route::get('/admin-reviews', function (){return view('admin.reviews');});
Route::get('/admin-transactions-list', function (){return view('admin.transactions-list');});
Route::get('/admin-invoice-report', function (){return view('admin.invoice-report');});
Route::get('/admin-forgot-password', function (){return view('admin.forgot-password');});
Route::get('/admin-lock-screen', function (){return view('admin.lock-screen');});
Route::get('/admin-error-404', function (){return view('admin.error-404');});
Route::get('/admin-error-500', function (){return view('admin.error-500');});
Route::get('/admin-blank-page', function (){return view('admin.blank-page');});
Route::get('/admin-components', function (){return view('admin.components');});

Route::get('/admin-form-basic-inputs', function (){return view('admin.form-basic-inputs');});
Route::get('/admin-form-input-groups', function (){return view('admin.form-input-groups');});
Route::get('/admin-form-horizontal', function (){return view('admin.form-horizontal');});
Route::get('/admin-form-vertical', function (){return view('admin.form-vertical');});
Route::get('/admin-form-validation', function (){return view('admin.form-validation');});
Route::get('/admin-tables-basic', function (){return view('admin.tables-basic');});
Route::get('/admin-data-tables', function (){return view('admin.data-tables');});

});
//===========================================================================================================