
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function() {
	return view('index');
});
Auth::routes();

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

//Route untuk register teacher dan staff

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', 'User\UserController@index')->name('dashboard.users');
});
Route::get('/index', 'user\UserController@admin')->name('dashboard.admin');
Route::get('home','HomeController@index');
Route::get('list-buku' , 'User\UserController@ListBuku');
Route::get('list-user' , 'User\UserController@ListUser');
Route::get('add-book' , 'User\UserController@AddBook');
Route::get('list-buku-admin' , 'User\UserController@ListBukuAdmin');
Route::get('Peminjaman-buku' , 'User\UserController@Peminjaman');
Route::get('History' , 'User\UserController@History');
Route::get('Peminjaman-buku-user' , 'User\UserController@PeminjamanUser');
Route::get('History-user' , 'User\UserController@HistoryUser');














