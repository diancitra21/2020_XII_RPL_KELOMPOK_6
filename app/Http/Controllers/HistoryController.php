<?php

namespace App\Http\Controllers;

use App\Borrows;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function Index (){
        $row = 1;
        $borrow  = Borrows::join('books', 'borrows.book_id', '=', 'books.book_id')
            ->join('users', 'borrows.usr_id', '=', 'users.usr_id')
            ->where('status'  , 1)
            ->select('borrows.*', 'books.*', 'users.*')->get();
        $topTable = 1;
        return view ('admin.peminjaman-buku',['borrow' => $borrow, 'row' => $row, 'topTable' => $topTable]);
    }
}
