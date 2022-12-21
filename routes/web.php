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



// [Frontend Controllers]


//Dashboard
Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//Patients
Route::get('addpatient',[PatientsController::class,'addpatient'])->name('addpatient');
Route::get('allpatients',[PatientsController::class,'allpatients'])->name('allpatients');
Route::get('editpatient',[PatientsController::class,'editpatient'])->name('editpatient');
Route::get('patientdetails',[PatientsController::class,'patientdetails'])->name('patientdetails');

//Doctors
Route::get('adddoctor',[DoctorsController::class,'adddoctor'])->name('adddoctor');
Route::get('alldoctors',[DoctorsController::class,'alldoctors'])->name('alldoctors');
Route::get('doctordetails',[DoctorsController::class,'doctordetails'])->name('doctordetails');
Route::get('editdoctor',[DoctorsController::class,'editdoctor'])->name('editdoctor');

//Appointments
Route::get('addappointment',[AppointmentsController::class,'addappointment'])->name('addappointment');
Route::get('allappointments',[AppointmentsController::class,'allappointments'])->name('allappointments');
Route::get('appointmentdetails',[AppointmentsController::class,'appointmentdetails'])->name('appointmentdetails');
Route::get('editappointment',[AppointmentsController::class,'editappointment'])->name('editappointment');

//BloodBank
Route::get('addbloodbank',[BloodBankController::class,'addbloodbank'])->name('addbloodbank');
Route::get('allbloodbanks',[BloodBankController::class,'allbloodbanks'])->name('allbloodbanks');
Route::get('bloodbankdetails',[BloodBankController::class,'bloodbankdetails'])->name('bloodbankdetails');
Route::get('editbloodbank',[BloodBankController::class,'editbloodbank'])->name('editbloodbank');

//Pharmacy
Route::get('addpharmacy',[PharmacyController::class,'addpharmacy'])->name('addpharmacy');
Route::get('allpharmacies',[PharmacyController::class,'allpharmacies'])->name('allpharmacies');
Route::get('pharmacydetails',[PharmacyController::class,'pharmacydetails'])->name('pharmacydetails');
Route::get('editpharmacy',[PharmacyController::class,'editpharmacy'])->name('editpharmacy');

//Payments
Route::get('addpayment',[PaymentsController::class,'addpayment'])->name('addpayment');
Route::get('allpayments',[PaymentsController::class,'allpayments'])->name('allpayments');
Route::get('paymentinvoice',[PaymentsController::class,'paymentinvoice'])->name('paymentinvoice');

//Roomallotments
Route::get('addroomallotment',[RoomAllotmentsController::class,'addroomallotment'])->name('addroomallotment');
Route::get('allrooms',[RoomAllotmentsController::class,'allrooms'])->name('allrooms');
Route::get('roomtype',[RoomAllotmentsController::class,'roomtype'])->name('roomtype');
Route::get('editroomallotment',[RoomAllotmentsController::class,'editroomallotment'])->name('editroomallotment');

//Departments
Route::get('adddepartment',[DepartmentController::class,'adddepartment'])->name('adddepartment');
Route::get('alldepartments',[DepartmentController::class,'alldepartments'])->name('alldepartments');
Route::get('departmentdetails',[DepartmentController::class,'departmentdetails'])->name('departmentdetails');
Route::get('editdepartment',[DepartmentController::class,'editdepartment'])->name('editdepartment');

//otherpages
Route::get('invoice',[InvoiceController::class,'index'])->name('invoice');
Route::get('login',[InvoiceController::class,'login'])->name('login');
Route::get('signup',[InvoiceController::class,'signup'])->name('signup');

// [Backend Controllers]
Route::get('departmentcreate',[DepartmentController::class,'index'])->name('departmentindex');
Route::get('departmentdisplay',[DepartmentController::class,'show'])->name('departmentcreate');
Route::get('departmentedit/{id}',[DepartmentController::class,'edit'])->name('departmentedit');
Route::post('departmentupdate/{id}',[DepartmentController::class,'update'])->name('departmentupdate');
Route::post('departmentstore',[DepartmentController::class,'store'])->name('departmentstore');
Route::get('departmentdelete/{id}',[DepartmentController::class,'delete'])->name('departmentdelete');