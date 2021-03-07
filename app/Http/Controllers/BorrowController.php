<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrows;
use App\Users;
use App\Books;
use App\User;
use App\Pay_fines
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
            ->whereNotIn('bor_status'  , [1])
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
        $book = Books::whereBokId($bok_id)->first();
        $stock = $book->bok_stok;
        $tot_borrow = $request->jumlahpinjam;


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
            $book->bok_stok = $stock - $tot_borrow;
            $book->update();
        }
        return redirect('/Peminjaman-buku')->with('success', 'Buku Berhasil Dipinjam!');
        }
   }

   public function storeReturn(Request $request){
    
        
        $brw = Borrows::where('bor_id',$request->bor_id)->first();
        $brw->bor_fine = $request->input('brw_fine');
        if ($request->input('brw_fine')>0) {
            $status =2;
        } else {
            $status = 1;
        }
        
        $brw->bor_status = $status;
        $brw->update();

        $book = Books::where('bok_id', $brw->bor_book_id)->first();
        $book->bok_stok += $brw->bor_total_books;
        $book->update();
        return redirect('/history-peminjaman')->withSuccess('Pengembalian Buku Berhasil');
   }

    public function Denda(Request $request){ 
        Pay_fines::create([
            'pay_fine' =>$request->input('pay_fine'),
            'pay_borrow_id' => $request->input('bor_id')
        ]);
        return back()->with('success', 'Data Berhasil Disimpan!');
    }
}
