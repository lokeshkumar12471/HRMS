<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RoomAllotmentsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\BloodBankController;

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






//Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Patients
Route::get('getpatientbydept',[PatientsController::class,'getpatientbydept'])->name('getpatientbydept');
Route::get('patientcreate',[PatientsController::class,'index'])->name('patientcreate');
Route::get('patientdisplay',[PatientsController::class,'create'])->name('allpatients');
Route::post('patientstore',[AppointmentsController::class,'store'])->name('patientstore');
Route::get('getpatientbyid',[PatientsController::class,'getpatientbyid'])->name('getpatientbyid');
Route::post('patientupdate/{id}',[PatientsController::class,'update'])->name('patientupdate');
Route::get('patientdelete',[PatientsController::class,'delete'])->name('patientdelete');
Route::get('patientdetails/{id}', [PatientsController::class, 'patientdetails'])->name('patientdetails');




//Doctors
Route::get('doctorcreate', [DoctorsController::class, 'index'])->name('doctorcreate');
Route::get('doctordisplay', [DoctorsController::class, 'create'])->name('alldoctors');
Route::post('doctorstore', [DoctorsController::class, 'store'])->name('doctorstore');
Route::get('getdoctorbyid', [DoctorsController::class, 'getdoctorbyid'])->name('getdoctorbyid');
Route::post('doctorupdate', [DoctorsController::class, 'update'])->name('doctorupdate');
Route::get('doctordelete', [DoctorsController::class, 'delete'])->name('doctordelete');

//Appointments
Route::get('appointmentdisplay', [AppointmentsController::class, 'create'])->name('allappointments');
Route::get('getappointmentbyid', [AppointmentsController::class, 'getappointmentbyid'])->name('getappointmentbyid');
Route::get('editappointment', [AppointmentsController::class, 'editappointment'])->name('editappointment');
Route::post('appointmentstore',[AppointmentsController::class,'store'])->name('appointmentstore');
Route::get('addappointment',[AppointmentsController::class,'index'])->name('addappointment');




//BloodBank
Route::get('addbloodbank', [BloodBankController::class, 'addbloodbank'])->name('addbloodbank');
Route::get('bloodbankdetails', [BloodBankController::class, 'bloodbankdetails'])->name('bloodbankdetails');
Route::post('bloodbank', [BloodBankController::class, 'store'])->name('bloodbank');
Route::get('allbloodbanks', [BloodBankController::class, 'create'])->name('allbloodbanks');
Route::get('editbloodbank', [BloodBankController::class, 'edit'])->name('editbloodbank');
Route::get('deletebloodbank', [BloodBankController::class, 'delete'])->name('deletebloodbank');


//Pharmacy
Route::get('addpharmacy', [PharmacyController::class, 'addpharmacy'])->name('addpharmacy');
Route::get('allpharmacies', [PharmacyController::class, 'allpharmacies'])->name('allpharmacies');
Route::get('pharmacydetails', [PharmacyController::class, 'pharmacydetails'])->name('pharmacydetails');
Route::get('editpharmacy', [PharmacyController::class, 'editpharmacy'])->name('editpharmacy');

//Payments
Route::get('addpayment', [PaymentsController::class, 'addpayment'])->name('addpayment');
Route::get('allpayments', [PaymentsController::class, 'allpayments'])->name('allpayments');
Route::get('paymentinvoice', [PaymentsController::class, 'paymentinvoice'])->name('paymentinvoice');

//Roomallotments
Route::get('addroomallotment', [RoomAllotmentsController::class, 'addroomallotment'])->name('addroomallotment');
Route::get('allrooms', [RoomAllotmentsController::class, 'allrooms'])->name('allrooms');
Route::get('roomtype', [RoomAllotmentsController::class, 'roomtype'])->name('roomtype');
Route::get('editroomallotment', [RoomAllotmentsController::class, 'editroomallotment'])->name('editroomallotment');

// //Departments
Route::get('departmentcreate', [DepartmentController::class, 'create'])->name('departmentcreate');
Route::get('departmentdisplay', [DepartmentController::class, 'index'])->name('alldepartments');
Route::post('departmentstore', [DepartmentController::class, 'store'])->name('departmentstore');
Route::get('departmentedit/{id}', [DepartmentController::class, 'edit'])->name('departmentedit');
Route::post('departmentupdate/{id}', [DepartmentController::class, 'update'])->name('departmentupdate');
Route::get('departmentdelete', [DepartmentController::class, 'delete'])->name('departmentdelete');

//otherpages
Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('login', [InvoiceController::class, 'login'])->name('login');
Route::get('signup', [InvoiceController::class, 'signup'])->name('signup');