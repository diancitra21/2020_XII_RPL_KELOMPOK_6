<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrows;

class BorrowController extends Controller
{
    public function index()
    {
    	$borrow  = Borrows::join('books', 'borrows.book_id', '=', 'books.book_id')->select('borrows.*', 'books.*')->get();
    	return view ('admin.peminjaman-buku',['borrow' => $borrow]);
    }

}
