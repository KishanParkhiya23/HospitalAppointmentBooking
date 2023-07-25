<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CallingController;
use App\Http\Controllers\ChangePswdController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ForgetPassController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignUpController;
use GuzzleHttp\Middleware;
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

Route::get('/', [CallingController::class, 'Home'])->name('Home');
Route::get('AboutUs', [CallingController::class, 'AboutUs'])->name('AboutUs');
Route::get('Contact', [CallingController::class, 'Contact'])->name('Contact');
Route::get('Doctor', [CallingController::class, 'Doctor'])->name('Doctor');
Route::get('SignUp', [CallingController::class, 'SignUp'])->name('SignUp');
Route::get('LogIn', [CallingController::class, 'LogIn'])->name('LogIn');

// Sign Up data save
Route::post('SignUpSave', [SignUpController::class, 'SignUpSave'])->name('SignUpSave');

// Log In Data Check Route
Route::post('LogInCheck', [LogInController::class, 'LogInCheck'])->name('LogInCheck');

// Forget password
Route::get('ForgetPass', [ForgetPassController::class, 'ForgetPassCall'])->name('ForgetPass');
Route::post('ForgetPswdSave', [ForgetPassController::class, 'ForgetPswdSave'])->name('ForgetPswdSave');



// Group Middleware
Route::group(['middleware' => 'LogIn'], function () {

    Route::get('Profile', [CallingController::class, 'Profile'])->name('Profile');

    //Appointment Page Call
    Route::get('Appointment', [CallingController::class, 'Appointment'])->name('Appointment');
    // Appointment data save
    Route::post('AppointmentSave', [AppointmentController::class, 'GetAppointment'])->name('AppointmentSave');

    //Edit Profile
    Route::get('Edit', [EditController::class, 'Edit'])->name('Edit');
    Route::post('EditSave{id}', [EditController::class, 'EditSave'])->name('SaveEdit');

    // Change Password
    Route::get('ChangrPswdPage', [ChangePswdController::class, 'ChangrPswdPage'])->name('ChangrPswdPage');
    Route::post('ChangePswdSave', [ChangePswdController::class, 'ChangePswdSave'])->name('ChangePswdSave');

    // Log Out Route
    Route::get('LogOut', [LogInController::class, 'LogOut'])->name('LogOut');
});



//***************************
// Admin Side Routes 
//***************************



Route::get('AdLogIn', [AdminController::class, 'AdLogInCall'])->name('AdLogIn');
Route::post('AdLogInCheck', [AdminController::class, 'AdLogInCheck'])->name('AdLogInCheck');

Route::get('AdForgetPswd', [AdminController::class, 'AdForgetPswdCall'])->name('AdForgetPswd');
Route::post('AdForgetPswdSave', [AdminController::class, 'AdForgetPswdSave'])->name('AdForgetPswdSave');


// Group Middleware
Route::group(['middleware' => 'AdLogIn'], function () {

    Route::get('AdHome', [AdminController::class, 'AdHomeCall'])->name('AdHome');

    Route::get('AdAppointment', [AdminController::class, 'AdAppointmentCall'])->name('AdAppointment');
    Route::get('AdAcceptAp{id}', [AdminController::class, 'AdAcceptApCall'])->name('AdAcceptAp');
    Route::post('AdAppointmentConfirmation{id}', [AdminController::class, 'AdAppointmentConfirmation'])->name('AdAppointmentConfirmation');

    Route::get('AdProfile', [AdminController::class, 'AdProfileCall'])->name('AdProfile');
    Route::get('AdChangePswd', [AdminController::class, 'AdChangePswdCall'])->name('AdChangePswd');
    Route::post('AdChangePswdSave', [AdminController::class, 'AdChangePswdSave'])->name('AdChangePswdSave');
    Route::get('AdEdit', [AdminController::class, 'AdEditCall'])->name('AdEdit');
    Route::post('AdEditSave{id}', [AdminController::class, 'AdEditSave'])->name('AdEditSave');

    Route::get('AdLogOut', [AdminController::class, 'AdLogOut'])->name('AdLogOut');
});
