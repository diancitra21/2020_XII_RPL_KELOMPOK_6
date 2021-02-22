<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Classes;
use App\Categories;
use App\Users;




class BookController extends Controller
{
    public function index()
    {
        $row = 0;
        $book  = Books::join('classes', 'books.class_id', '=', 'classes.class_id')->join('categories', 'books.category_id', '=', 'categories.category_id')->select('books.*', 'classes.*', 'categories.*')->get();
        return view ('admin.book',['book' => $book]);

        
    }
    public function add_book()
    {
        $class = Classes::all();
        $category = Categories::all();
        return view('admin.tambah_buku',['class'=> $class, 'category'=> $category]);
    }
    public function save(Request $request){ 
        $book = new Books;
         $book->title_book        = $request->judul_buku;
        $book->class_id           = $request->kelas;
        $book->book_publisher     = $request->penerbit;
        $book->book_page_total    = $request->jumlah_halaman;
        $book->book_total         = $request->total_buku;
        $book->category_id      = $request->kategori_buku;
        $book->save();
        return redirect('/book')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($book_id)
    {
        $book = Books::find($book_id);
        $class = classes::all();
        $category = Categories::all();
        return view ('admin.edit-book',['book'=> $book, 'class'=> $class, 'category' => $category]);
    }

    public function update(Request $request, $book_id)
    {
        $book = Books::find($book_id);
        $book->title_book        = $request->judul_buku;
        $book->class_id          = $request->kelas;
        $book->book_publisher    = $request->penerbit;
        $book->book_page_total   = $request->jumlah_halaman;
        $book->book_total        = $request->jumlah_buku;
        $book->category_id     = $request->kategori_buku;
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
        
         $book  = Books::join('classes', 'books.class_id', '=', 'classes.class_id')->join('categories', 'books.category_id', '=', 'categories.category_id')->select('books.*', 'classes.*', 'categories.*')->get();
        return view('admin.list-book', ['book' => $book]);
    }

   
   
}