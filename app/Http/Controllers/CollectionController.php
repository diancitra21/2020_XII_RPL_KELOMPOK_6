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
        $collection = Collections::all();
       return view('admin.koleksi',['row' => $row, 'collection' => $collection ]);
    }

    public function show($col_id){
    	$row = 1;
        $collection = Books::join('classes', 'books.bok_class_id', '=', 'classes.cls_id')
        ->join('categories', 'books.bok_category_id', '=', 'categories.cat_id')->join('collections', 'books.bok_collection_id', '=', 'collections.col_id')->where ('col_id', '=', $col_id)->where('bok_collection_id', '=', $col_id)->get();
        return view('admin.detail_koleksi', ['collection' => $collection, 'row' => $row]);
    }                                                                                                 
}	
