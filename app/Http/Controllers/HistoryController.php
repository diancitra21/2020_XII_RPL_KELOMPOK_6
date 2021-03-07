<?php

namespace App\Http\Controllers;

use App\Borrows;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function Index (){
        $data ['row'] = 1;
        $data ['title'] = 'History Pengembalian';
        $data ['borrow']  = Borrows::join('books', 'borrows.bor_book_id', '=', 'books.bok_id')
            ->join('users', 'borrows.bor_usr_id', '=', 'users.usr_id')
            ->where('bor_status'  , 1)
            ->select('borrows.*', 'books.*', 'users.*')->get();
        $data ['topTable'] = 1;
        return view ('admin.peminjaman-buku',$data);
    }
}
