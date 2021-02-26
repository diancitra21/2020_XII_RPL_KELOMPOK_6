<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    protected $table	= 'borrows';
    protected $primaryKey = 'borrow_id';
    protected $fillable	= ['borrow_id', 'book_id', 'usr_id', 'borrow_total_books', 'borrow_date', 'borrow_back_date', 'status', 'borrow_fine'];
}
