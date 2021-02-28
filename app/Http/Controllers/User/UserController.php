<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;
use Validator;

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
    
    public function index()
    {
        return view ('admin.dashboard');
    }

    public function ListUser()
    {
        $user = Users::all();
        return view ('admin.list-user', ['user' => $user]);
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
       $this->validate($request, [
        'usr_name' => ['required', 'string', 'max:255'],
        'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email,'.$user->usr_id.',usr_id'],
        'usr_phone' => ['required', 'min:11', 'max:14'],
        ]);
       
        $user->usr_name        = $request->usr_name;
        $user->usr_email       = $request->usr_email;
        $user->usr_phone       = $request->usr_phone;
        $user->update();
        return redirect('/dashboard')->with('success', 'Data Berhasil Diedit!');
    }


    
   

    public function admin()
    {
        
        return view('admin.dashboard');
    }


    
}
