<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Classes;


class BookController extends Controller
{
    public function index()
    {
        $book  = Books::join('classes', 'books.class_id', '=', 'classes.class_id')->select('books.*', 'classes.*')->get();
        return view ('admin.book',compact('book'));

        
    }
    public function add_book()
    {
        $class = Classes::all();
        return view('admin.tambah_buku',compact('class'));
    }
    public function save(Request $request){
        $this->validate($request, [
            'title_book'            =>$request->judul_buku,
            'class_id'     => $request->kelas,
            'book_publisher'       => $request->penerbit,
            'book_page_total'            => $request->jumlah_halaman,
            'book_total'            => $request->total_buku,
            'book_category'         => $request->kategori_buku,
            ]);
        
        $book = new Books;
         $book->title_book = $request->judul_buku;
        $book->class_id = $request->kelas;
        $book->book_publisher = $request->penerbit;
        $book->book_page_total = $request->jumlah_halaman;
        $book->book_total = $request->total_buku;
        $book->book_category = $request->kategori_buku;
        $book->save();
        return redirect('/book')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($book_id)
    {
        $book = Books::find($book_id);
        $class = classes::all();
        return view ('admin.edit-book',['book'=> $book, 'class'=> $class]);
    }

    public function update(Request $request, $book_id)
    {
        $book = Books::find($book_id);
        $book->title_book = $request->judul_buku;
        $book->class_id = $request->kelas;
        $book->book_publisher = $request->penerbit;
        $book->book_page_total = $request->jumlah_halaman;
        $book->book_total = $request->jumlah_buku;
        $book->book_category = $request->kategori_buku;
        $book->update();
        return redirect('/book')->with('success', 'Data Berhasil Diedit!');
    }

    public function delete($book_id)
    {
        $book = Books::find($book_id);
        $book->delete();
        return redirect('/book')->with('success', 'Data Berhasil Di Hapus!');
    }

    public function list_book()
    {
        $book = Books::join('classes', 'books.class_id', '=', 'classes.class_id')->select('books.*', 'classes.*')->get();
        return view('admin.list-book', ['book' => $book]);
    }

}