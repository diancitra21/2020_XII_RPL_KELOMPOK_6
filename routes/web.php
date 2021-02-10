
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Users;
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
    return view('auth.login');
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
    Route::get('/dashboard', 'BookController@list_book')->name('dashboard.users');
});
Route::get('/dashboard', 'User\UserController@DashboardAdmin')->name('dashboard.admin');
Route::get('book' , 'BookController@index');
Route::get('tambah_buku' , 'BookController@add_book');
Route::post('book' , 'BookController@save');
Route::get('edit-book/{book_id}' , 'BookController@edit');
Route::post('update/{book_id}' , 'BookController@update');
Route::get('delete/{book_id}' , 'BookController@delete');
Route::get('/list-book', 'BookController@list_book');
//peminjaman
Route::get('Peminjaman-buku' , 'BorrowController@index');
Route::get('peminjaman/{book_id}' , 'BorrowController@store');





Route::get('Peminjaman-buku-user' , 'User\UserController@PeminjamanUser');
Route::get('History-user' , 'User\UserController@HistoryUser');

Route::get('My_Profile' , 'User\UserController@MyProfile');
Route::get('Profile_user' , 'User\UserController@Profile_user');

Route::get('detail_admin' , 'User\UserController@DetailAdmin');
Route::get('detail_admin/{usr_id}' , 'User\UserController@edit');
Route::post('update/{usr_id}' , 'User\UserController@update');

Route::get('detail_users' , 'User\UserController@DetailUserAdmin');
Route::get('detail_user' , 'User\UserController@DetailUser');


















