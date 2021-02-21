<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrows;
use App\Users;

class BorrowController extends Controller
{
    public function index()
    {
    	$borrow  = Borrows::join('books', 'borrows.book_id', '=', 'books.book_id')->
    				join('users', 'borrows.usr_id', '=', 'users.usr_id')->
    				select('borrows.*', 'books.*', 'users.*')->get();
    	return view ('admin.peminjaman-buku',['borrow' => $borrow]);
    }

    

   
}
