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
    	$borrow  = Borrows::join('books', 'borrows.bor_book_id', '=', 'books.bok_id')
            ->join('users', 'borrows.bor_usr_id', '=', 'users.usr_id')
            ->where('bor_status'  , 0)
            ->select('borrows.*', 'books.*', 'users.*')
            ->orderBy('borrows.bor_id',  'DESC')
            ->get();

    	return view ('admin.peminjaman-buku',['borrow' => $borrow, 'row' => $row, 'topTable'  => $topTable]);
    }


 public function PinjamBuku(request $request, $bok_id){
        $user = User::all();

        $book = Books::whereBokId($bok_id)->first();
        return view('admin.pinjam_buku', ['user' => $user, 'book' => $book]);
    }

     public function saveBorrow(Request $request, $bok_id){
        $book = Books::whereBookId($bok_id)->first();
        $stock = $book->bok_stok;
        $tot_borrow = $request->input('jumlahpinjam');


        if ($stock <= 0) {
            \Session::flash('gagal', 'Stok Sudah Habis');
            return redirect('/list-book')->with('info', 'stok habis');
        } elseif($stock < $tot_borrow) {
            \Session::flash('gagal', 'Jumlah Pinjam Lebih Dari Stok');
            return redirect('/list-book')->with('info', 'stok buku kurang') ;
        } elseif ($stock > $tot_borrow or $stock == $tot_borrow) {

        $borrow = new Borrows;
        $borrow->bor_book_id                = $request->judul_buku;
        $borrow->bor_usr_id                 = $request->namapeminjam;
        $borrow->bor_total_books     = $request->jumlahpinjam;
        $borrow->bor_date            = $request->tgl_pinjam;
        $borrow->bor_back_date       = $request->tgl_kembali;
        $borrow->bor_status                 = 0;
        $save =  $borrow->save();
        if($save){
            $book->book_stok = $stock - $tot_borrow;
            $book->update();
        }
        return redirect('/Peminjaman-buku')->with('success', 'Buku Berhasil Dipinjam!');
        }
   }

   public function storeReturn(Request $request){
        $borrow_id = $request->input('bor_id');
        $brw = Borrows::whereBorrowId($bor_id)->first();
        $brw->status = 1;
        $brw->save();

        $book = Books::whereBookId($brw->bor_bok_id)->first();
        $book->book_stok += $brw->bor_total_books;
        $book->save();
        return redirect('/history-peminjaman')->withSuccess('Pengembalian Buku Berhasil');
   }
}
