<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Classes;
use App\Categories;
use App\Users;
use App\Collections;




class BookController extends Controller
{
    public function index()
    {
        $row = 1;
        $book  = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')
        ->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')
        ->select('books.*', 'classes.*', 'categories.*', 'collections.*')
        ->orderBy('books.bok_id',  'DESC')
            ->paginate(10);
        return view ('admin.book',['book' => $book, 'row' => $row]);

        
    }
    public function add_book()
    {
        $class = Classes::all();
        $category = Categories::all();
        $collection = Collections::all();
        return view('admin.tambah_buku',['class'=> $class, 'category'=> $category, 'collection' => $collection ]);
    }
    public function save(Request $request){ 
        $book = new Books;
        $book->bok_title_book        = $request->judul_buku;
        $book->bok_class_id           = $request->kelas;
        $book->bok_publisher     = $request->penerbit;
        $book->bok_page_total    = $request->jumlah_halaman;
        $book->bok_total         = $request->total_buku;
        $book->bok_stok         = $request->total_buku;
        $book->bok_category_id      = $request->kategori_buku;
        $book->bok_collection_id      = $request->koleksi_buku;
        $book->save();
        return redirect('/book')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($bok_id)
    {
       $book = Books::find($bok_id);
        $class = classes::all();
        $category = Categories::all();
        $collection = Collections::all();
       
         
        return view ('admin.edit-book',['book'=> $book, 'class'=> $class, 'category' => $category, 'collection' => $collection]);
    }

    public function update(Request $request, $bok_id)
    {
        $book = Books::find($bok_id);
        $book->bok_title_book        = $request->judul_buku;
        $book->bok_class_id       = $request->kelas;
        $book->bok_publisher    = $request->penerbit;
        $book->bok_page_total   = $request->jumlah_halaman;
        $book->bok_total        = $request->jumlah_buku;
        $book->bok_stok        = $request->stok_buku;
        $book->bok_category_id     = $request->kategori_buku;
        $book->bok_collection_id      = $request->koleksi_buku;
        $book->update();
        return redirect('/book')->with('success', 'Data Berhasil Diedit!');
    }

    public function delete($bok_id)
    {
        $book = Books::find($bok_id);
        $book->delete();
        return redirect('/book')->with('success', 'Data Berhasil Di Hapus!');
    }

    public function trash()
   {
    $trash=Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')
        ->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')
        ->select('books.*', 'classes.*', 'categories.*', 'collections.*')->onlyTrashed()->get();
    $row = 1;
    return view('admin.trash', compact('trash','row'));
   }  

   public function restore($bok_id)
   {
    $restore=Books::onlyTrashed()->where('bok_id',$bok_id);
    $restore->restore();
    return redirect('/book')->with('success', 'Data Berhasil Di Restore!');
   }

    public function list_book()
    {
        $row = 1;
         $book  = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')
        ->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')
        ->select('books.*', 'classes.*', 'categories.*', 'collections.*')
        ->orderBy('books.bok_id',  'DESC')
            ->paginate(10);
        return view('admin.list-book', ['book' => $book, 'row'=>$row]);
    }

    public function cari( Request $request){

$row = 1;

$cari = $request->cari;

$book = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')
        ->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')->where('bok_title_book','like',"%". $cari. "%")->paginate();


return view('admin.list-book', ['book' => $book, 'row'=>$row]); }

public function caribuku(Request $request)

{

$row = 1;

$cari = $request->cari;

$book = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id') ->join('categories', 'books.bok_category_id', 'categories.cat_id') ->join('collections', 'books.bok_collection_id', 'collections.col_id')->where('bok_title_book','like',"%". $cari. "%")->paginate();
return view('admin.book', ['book' => $book, 'row'=>$row]); 

}

}