<?php

namespace App\Http\Controllers;

use App\Borrows;
use Illuminate\Http\Request;
use App\Books;
use App\Collections;
use App\Users;
use App\Borrow;
use App\Visitors;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
         $book = Books::count();
         $visitor = Visitors::count();
         $borrow = Borrows::count();
         $collection = Collections::count();
       return view('users.dashboard',['book' =>$book, 'visitor' => $visitor, 'borrow' =>$borrow, 'collection' => $collection]);
    }

    public function ListBuku(Request $request)
    {
    	$row = 1;
        if ($request->has('cari')) {
        $book  = \App\Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')
        ->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')
        ->select('books.*', 'classes.*', 'categories.*', 'collections.*')
        ->orderBy('books.bok_id',  'DESC')
        ->where('bok_title_book', 'LIKE', '%'. $request->cari. '%')->get();
            
        }else{
        $book  = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')
        ->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')
        ->select('books.*', 'classes.*', 'categories.*', 'collections.*')
        ->orderBy('books.bok_id',  'DESC')
            ->get();
        }
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

    public function peminjaman (Request $request){
        if ($request->has('cari')) {
            $data ['borrow']  = \App\Borrows::join('books', 'borrows.bor_book_id', '=', 'books.bok_id')
            ->join('users', 'borrows.bor_usr_id', '=', 'users.usr_id')
            ->where('borrows.bor_usr_id'  , Auth::user()->usr_id)
            ->select(
                'borrows.*', 'books.*', 'users.*',
            )
            ->orderBy('borrows.bor_id',  'DESC')
            ->where('bok_title_book', 'LIKE', '%'. $request->cari. '%')->get();
        
        }else{
        $data ['borrow']  = Borrows::join('books', 'borrows.bor_book_id', '=', 'books.bok_id')
            ->join('users', 'borrows.bor_usr_id', '=', 'users.usr_id')
            ->where('borrows.bor_usr_id'  , Auth::user()->usr_id)
            ->select(
                'borrows.*', 'books.*', 'users.*',
            )
            ->orderBy('borrows.bor_id',  'DESC')
            ->get();
        }
        return view ('users.peminjaman-buku-user', $data);
    }


}
