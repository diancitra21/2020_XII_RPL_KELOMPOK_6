<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table	= 'books';
    protected $primaryKey = 'book_id';
    protected $fillable	= ['id'];
}
 public function save_books($data)
    {
    	return Books::create($data);
    }
