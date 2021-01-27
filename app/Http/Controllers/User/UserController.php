<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth']);
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
    

    public function ListBukuAdmin()
    {
        return view ('admin.list-buku-admin');
    }

    public function Peminjaman()
    {
        return view ('admin.peminjaman-buku');
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
