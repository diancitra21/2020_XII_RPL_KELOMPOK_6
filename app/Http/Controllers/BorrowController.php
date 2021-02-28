<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrows;
use App\Users;
use App\Books;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Contracts\Role;

class BorrowController extends Controller
{
    public function index()
    {
    	$row = 1;
        $topTable = 0;
    	$borrow  = Borrows::join('books', 'borrows.book_id', '=', 'books.book_id')
            ->join('users', 'borrows.usr_id', '=', 'users.usr_id')
            ->where('status'  , 0)
            ->select('borrows.*', 'books.*', 'users.*')->get();

    	return view ('admin.peminjaman-buku',['borrow' => $borrow, 'row' => $row, 'topTable'  => $topTable]);
    }


 public function PinjamBuku(request $request, $book_id){
        $user = User::all();

        $book = Books::whereBookId($book_id)->first();
        return view('admin.pinjam_buku', ['user' => $user, 'book' => $book]);
    }

     public function saveBorrow(Request $request, $book_id){
        $book = Books::whereBookId($book_id)->first();
        $stock = $book->book_stok;
        $tot_borrow = $request->input('jumlahpinjam');


        if ($stock <= 0) {
            \Session::flash('gagal', 'Stok Sudah Habis');
            return redirect('/list-book')->with('info', 'stok habis');
        } elseif($stock < $tot_borrow) {
            \Session::flash('gagal', 'Jumlah Pinjam Lebih Dari Stok');
            return ('stok nya kurang');
        } elseif ($stock > $tot_borrow or $stock == $tot_borrow) {

        $borrow = new Borrows;
        $borrow->book_id                = $request->judul_buku;
        $borrow->usr_id                 = $request->namapeminjam;
        $borrow->borrow_total_books     = $request->jumlahpinjam;
        $borrow->borrow_date            = $request->tgl_pinjam;
        $borrow->borrow_back_date       = $request->tgl_kembali;
        $borrow->status                 = 0;
        $save =  $borrow->save();
        if($save){
            $book->book_stok = $stock - $tot_borrow;
            $book->update();
        }
        return redirect('/Peminjaman-buku')->with('success', 'Buku Berhasil Dipinjam!');
        }
   }

   public function storeReturn(Request $request){
        $borrow_id = $request->input('borrow_id');
        $brw = Borrows::whereBorrowId($borrow_id)->first();
        $brw->status = 1;
        $brw->save();

        $book = Books::whereBookId($brw->book_id)->first();
        $book->book_stok += $brw->borrow_total_books;
        $book->save();
        return back()->withSuccess('Pengembalian Buku Berhasil');
   }
}
