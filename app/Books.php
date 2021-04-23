<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table	= 'books';
    protected $primaryKey = 'bok_id';
    protected $fillable	= ['bok_id','bok_title_book','bok_class_id','bok_publisher','bok_page_total','bok_total','bok_category_id', 'bok_collection_id'];

    
}