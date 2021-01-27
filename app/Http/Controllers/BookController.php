<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BookController extends Controller
{
    public function index()
    {
        $book = Books::all();
        return view ('admin.book',compact('book'));

        
    }
    public function add_book()
    {
        return view ('admin.tambah_buku');
    }
    public function save_book(Request $request)
    {
        Books::create([
            'title_book' =>$request->judul_buku,
            'class' =>$request->kelas,
            'book_publisher' =>$request->penerbit,
            'book_page_total' =>$request->jumlah_halaman,
            'book_total' =>$request->total_buku,
            'book_category' =>$request->kategori_buku
        ]);
        return redirect('/book');
    }

    public function edit($book_id)
    {
        $book = Books::find($book_id);
        return view ('admin.edit-book',compact('book'));
    }

    public function update(Request $request, $book_id)
    {
        $book = Books::find($book_id);
        $book->title_book = $request->judul_buku;
        $book->class = $request->kelas;
        $book->book_publisher = $request->penerbit;
        $book->book_page_total = $request->jumlah_halaman;
        $book->book_total = $request->jumlah_buku;
        $book->book_category = $request->kategori_buku;
        $book->update();
        return redirect('/book');
    }

    public function delete($book_id)
    {
        $book = Books::find($book_id);
        $book->delete();
        return redirect('/book');
    }

    public function list_book()
    {
        $book = Books::all();
        return view('admin.dashboard', ['book' => $book]);
    }

}