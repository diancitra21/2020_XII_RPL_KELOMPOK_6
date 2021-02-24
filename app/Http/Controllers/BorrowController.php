<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrows;
use App\Users;
use App\Books;

class BorrowController extends Controller
{
    public function index()
    {
    	$row = 1;
    	$borrow  = Borrows::join('books', 'borrows.book_id', '=', 'books.book_id')->
    				join('users', 'borrows.usr_id', '=', 'users.usr_id')->
    				select('borrows.*', 'books.*', 'users.*')->get();
    	return view ('admin.peminjaman-buku',['borrow' => $borrow, 'row' => $row]);
    }

    
 public function PinjamBuku(request $request, $book_id){
        $user = Users::all();
        $book = Books::whereBookId($book_id)->first();
        return view('admin.pinjam_buku', ['user' => $user, 'book' => $book]);
    }

     public function saveBorrow(Request $request){ 
        $borrow = new Borrows;
        $borrow->book_id     		 	= $request->judul_buku;
        $borrow->usr_id         	 	= $request->namapeminjam;
        $borrow->borrow_total_books		= $request->jumlahpinjam;
        $borrow->borrow_date			= $request->tgl_pinjam;
        $borrow->borrow_back_date			= $request->tgl_kembali;
        $borrow->save();
        return redirect('/Peminjaman-buku')->with('success', 'Buku Berhasil Dipinjam!');
   }
}
