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
})->middleware('guest');


Route::get('/index', function () {
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
Route::group(['middleware' => ['role:admin', 'auth']], function () {

    Route::get('/dashboard', 'User\UserController@index')->name('dashboard.admin');
    Route::get('book', 'BookController@index');
    Route::get('tambah_buku', 'BookController@add_book');
    Route::post('book', 'BookController@save');
    Route::get('edit-book/{bok_id}', 'BookController@edit');
    Route::post('update/{bok_id}', 'BookController@update');
    Route::get('delete/{bok_id}', 'BookController@delete');
    Route::get('/list-book', 'BookController@list_book');
    Route::get('/pinjam_buku/{bok_id}', 'BorrowController@pinjamBuku');
    Route::post('/Peminjaman-buku/{bok_id}', 'BorrowController@saveBorrow');
    Route::get('/denda', 'BorrowController@Denda');

//peminjaman
    Route::get('Peminjaman-buku', 'BorrowController@index');
    Route::post('Peminjaman-buku', 'BorrowController@storeReturn');

    Route::get('history-peminjaman', 'HistoryController@index');


    Route::get('Peminjaman-buku-user', 'User\UserController@PeminjamanUser');
    Route::get('History-user', 'User\UserController@HistoryUser');

    Route::get('My_Profile', 'User\UserController@MyProfile');
    Route::get('Profile_user', 'User\UserController@Profile_user');

    Route::get('detail_admin', 'User\UserController@DetailAdmin');
    Route::get('detail_admin/{usr_id}', 'User\UserController@edit');
    Route::post('detail_admin/update/{usr_id}', 'User\UserController@update');

    Route::get('detail_users', 'User\UserController@DetailUserAdmin');
    Route::get('detail_user', 'UsersController@DetailUser');
    Route::get('list-user', 'User\UserController@ListUser');

    Route::get('detail_user/{usr_id}', 'UsersController@edit');
    Route::post('detail_user/update/{usr_id}', 'UsersController@update');
    Route::post('/denda' , 'BorrowController@Denda');
});

//Route::get('/dashboard', 'User\UserController@DashboardUser')->name('dashboard.users');
//admin
//buku

Route::group(['middleware' => ['role:user', 'auth']], function () {
    Route::get('/home', 'UsersController@index')->name('dashboard.users');
    Route::get('list-buku', 'UsersController@ListBuku');
    Route::get('/peminjaman', 'UsersController@peminjaman');

});


















