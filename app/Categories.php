<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     protected $table	= 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable	= ['cat_id', 'cat_book_category'];
}
