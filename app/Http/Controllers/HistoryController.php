<?php

namespace App\Http\Controllers;

use App\Borrows;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
     public function index(Request $request){
        $data ['row'] = 1;
        $data ['title'] = 'History Pengembalian';
        if ($request->has('cari')) {
            $data ['borrow'] = \App\Borrows::join('books', 'borrows.bor_book_id', '=', 'books.bok_id')
            ->join('users', 'borrows.bor_usr_id', '=', 'users.usr_id')
            ->where('bor_status' , 1)
            ->select('borrows.*', 'books.*', 'users.*')
            ->orderBy('borrows.bor_id',  'DESC')
            ->where('usr_name', 'LIKE', '%'. $request->cari. '%')->get();
        }else{
        $data ['borrow']  = Borrows::join('books', 'borrows.bor_book_id', '=', 'books.bok_id')
            ->join('users', 'borrows.bor_usr_id', '=', 'users.usr_id')
            ->where('bor_status' , 1)
            ->select('borrows.*', 'books.*', 'users.*')
            ->orderBy('borrows.bor_id',  'DESC')
            ->paginate(10);
    }
        $data ['topTable'] = 1;
        return view ('admin.history',$data);
    }
}
