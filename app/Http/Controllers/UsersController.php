<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Users;

class UsersController extends Controller
{
    public function index(){
       return view('users.dashboard');
    }

    public function ListBuku()
    {
    	 $row = 1;
        $book  = Books::join('classes', 'books.class_id', '=', 'classes.class_id')->join('categories', 'books.category_id', '=', 'categories.category_id')->select('books.*', 'classes.*', 'categories.*')->get();
        return view ('users.list-buku',['book' => $book, 'row' => $row]);
    }

    public function DetailUser()

    {
        return view ('users.detail_user');
    }


        public function edit($usr_id)
    {
        $user = Users::find($usr_id);
        return view('users.detail_user', ['user' => $user]);
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
        return redirect('/home')->with('success', 'Data Berhasil Diedit!');
    }

}
