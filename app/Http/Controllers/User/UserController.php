<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(){
       return view('users.dashboard');
    }
    public function ListBuku()
    {
        return view ('users.list-buku');
    }

    public function ListUser()
    {
        return view ('admin.list-user');
    }



    public function DashboardAdmin()
    {
        return view ('admin.dashboard');
    }

    public function PeminjamanUser()
    {
        return view ('users.peminjaman-buku-user');
    }

    public function HistoryUser()
    {
        return view ('users.history-user');
    }

    public function DetailAdmin()
    {
        return view ('admin.detail_admin');
    
    }
    public function edit($usr_id)
    {
        $user = Users::find($usr_id);
        return view('admin.detail_admin', ['user' => $user]);
    }

    public function update(Request $request, $usr_id) {
       $user = Users::find($usr_id);
        $user->usr_name     = $request->username;
        $user->usr_email    = $request->email;
        $user->usr_phone    = $request->phone;
        $user->update();
        return redirect('/dashboard')->with('success', 'Data Berhasil Di Edit!');
    }


    public function DetailUserAdmin()
    {
        return view ('admin.detail_users');
    }

    public function DetailUser()

    {
        return view ('users.detail_user');
    }

    public function admin()
    {
        
        return view('admin.dashboard');
    }


    
}
