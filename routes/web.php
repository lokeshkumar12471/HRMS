<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RoomAllotmentsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\InvoiceController;

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

//Payments
Route::get('addpayment',[PaymentsController::class,'addpayment'])->name('addpayment');
Route::get('allpayments',[PaymentsController::class,'allpayments'])->name('allpayments');
Route::get('paymentinvoice',[PaymentsController::class,'paymentinvoice'])->name('paymentinvoice');

//Roomallotments
Route::get('addroomallotment',[RoomAllotmentsController::class,'addroomallotment'])->name('addroomallotment');
Route::get('allrooms',[RoomAllotmentsController::class,'allrooms'])->name('allrooms');
Route::get('editroomallotment',[RoomAllotmentsController::class,'editroomallotment'])->name('editroomallotment');

//otherpages
Route::get('invoice',[InvoiceController::class,'index'])->name('invoice');
Route::get('login',[InvoiceController::class,'login'])->name('login');
Route::get('signup',[InvoiceController::class,'signup'])->name('signup');