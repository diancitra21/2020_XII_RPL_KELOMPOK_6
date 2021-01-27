<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
	use SoftDeletes;
    protected $table	= 'books';
    protected $primaryKey = 'book_id';
    protected $fillable	= ['book_id','title_book','class','book_publisher','book_page_total','book_total','book_category'];

    
}

