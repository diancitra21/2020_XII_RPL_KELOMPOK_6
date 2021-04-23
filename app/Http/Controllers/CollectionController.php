<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Collections;
use App\Books;

class CollectionController extends Controller
{
    public function index(){
    	$row = 1;
        $collection = Collections::paginate(10);
       return view('admin.koleksi',['row' => $row, 'collection' => $collection ]);
    }

    public function show($col_id){
    	$row = 1;
        $collection = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')->where ('col_id', '=', $col_id)->where('bok_collection_id', '=', $col_id)->get();
        return view('admin.detail_koleksi', ['collection' => $collection, 'row' => $row]);
    }                                                                                                 public function add_collect(){

$collection = Collections::all();

return view('admin.tambah_rak',['collection' => $collection ]);

}

public function save(Request $request){

$collection = new Collections;

$collection->col_rack = $request->nama_rak; $collection->save();

return redirect('/koleksi')->with('success', 'Data Berhasil Disimpan!');


}
public function cari( Request $request){

$row = 1;

$cari = $request->cari;

$collection = Collections::where('col_rack','like',"%". $cari. "%")->paginate();


return view('admin.koleksi',['row' => $row, 'collection' => $collection ]);
}

public function Search( Request $request){

$row = 1;

$cari = $request->cari;

$collection = Collections::where('col_rack','like',"%". $cari. "%")->paginate();


return view('admin.detal_koleksi',['row' => $row, 'collection' => $collection ]);
}	
}