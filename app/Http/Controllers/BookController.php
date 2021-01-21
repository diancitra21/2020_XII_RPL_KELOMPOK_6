<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
    public function index(){
 	   return view('users.dashboard');
    }
    public function add_books(){
        $book = books::all();
    	return view('admin/book', ['books' => $book]);
    }

    public function save_books(Request $request){
        $this->validate($request, [
            'book_title'            => 'required|min:3',
            'book_publisher_id'     => 'required',
            'book_page_total'       => 'required',
            'book_total'            => 'required',
            'book_category'         => 'required',
            ]);
        
    	$book = new Books;
    	$book->save_books($request->all());
    	return redirect('/books');
    }

    }