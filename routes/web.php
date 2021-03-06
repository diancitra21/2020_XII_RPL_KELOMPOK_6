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
    return redirect('/login');
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
Route::get('/dashboard', 'User\UserController@index')->name('dashboard.admin')->middleware(['auth', 'revalidate']);
//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini
Route::group(['middleware' => ['auth', 'revalidate', 'role:admin' ]], function () {

    
    Route::get('book', 'BookController@index');
    Route::get('koleksi', 'CollectionController@index');
    Route::get('Tambah_koleksi', 'CollectionController@add_collect');
    Route::get('tambah_buku', 'BookController@add_book');
    Route::post('book', 'BookController@save');
    Route::post('koleksi', 'CollectionController@save');

Route::get('/trash', 'BookController@trash');
Route::get('/restore/{bok_id}', 'BookController@restore');
Route::get('delete/{bok_id}', 'BookController@delete');
Route::get('buku_tamu', 'VisitorController@index');
Route::get('cetak_pengunjung', 'VisitorController@cetak_pengunjung');


Route::get('tambah_pengunjung', 'VisitorController@add_visitor');
Route::post('buku_tamu', 'VisitorController@Save');
Route::get('edit_pengunjung/{vst_id}', 'VisitorController@edit');
Route::post('Update/{vst_id}', 'VisitorController@Update');
Route::get('delete_vst/{vst_id}', 'VisitorController@delete');
Route::get('/buku_tamu/cari', 'VisitorController@cari');
    
    Route::get('edit-book/{bok_id}', 'BookController@edit');
    Route::post('update/{bok_id}', 'BookController@update');
   
    Route::get('/list-book', 'BookController@list_book');
    Route::get('/pinjam_buku/{bok_id}', 'BorrowController@pinjamBuku');
    Route::post('/Peminjaman-buku/{bok_id}', 'BorrowController@saveBorrow');
    Route::get('/denda', 'BorrowController@Denda');
    Route::get('detail_koleksi/{col_id}', 'CollectionController@show');
    Route::get('/koleksi/cari', 'CollectionController@cari');
    
//peminjaman
    Route::get('Peminjaman-buku', 'BorrowController@index');
    Route::post('Peminjaman-buku', 'BorrowController@storeReturn');
       Route::get('/Peminjaman-buku/cari', 'BorrowController@cari');
    Route::get('history-peminjaman', 'HistoryController@index');



    Route::get('Peminjaman-buku-user', 'User\UserController@PeminjamanUser');
    Route::get('History-user', 'User\UserController@HistoryUser');

    Route::get('My_Profile', 'User\UserController@MyProfile');
    Route::get('Profile_user', 'User\UserController@Profile_user');

    Route::get('detail_admin', 'User\UserController@DetailAdmin');
    Route::get('detail_admin/{usr_id}', 'User\UserController@edit');
    Route::post('detail_admin/update/{usr_id}', 'User\UserController@update');

    Route::get('detail_users', 'User\UserController@DetailUserAdmin');
    
    Route::get('list-user', 'User\UserController@ListUser');
 Route::get('/list-user/cari', 'User\UserController@cari');
    
    
    Route::post('/denda' , 'BorrowController@Denda');
    Route::get('/book/cari', 'BookController@caribuku');
    route::get('/list-book/cari', 'BookController@cari');
    
});


//admin
//buku

Route::group(['middleware' => ['auth', 'revalidate', 'role:user', 'verified']], function () {
    Route::get('/home', 'UsersController@index');
    Route::get('list-buku', 'UsersController@ListBuku');
    Route::get('/peminjaman', 'UsersController@peminjaman');
    Route::get('detail_user', 'UsersController@DetailUser');
    Route::get('detail_user/{usr_id}', 'UsersController@edit');
    Route::post('detail_user/update/{usr_id}', 'UsersController@update');
});


















