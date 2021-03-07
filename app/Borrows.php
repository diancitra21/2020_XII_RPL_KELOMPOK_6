<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    protected $table	= 'borrows';
    protected $primaryKey = 'bor_id';
    protected $fillable	= ['bor_id', 'bor_book_id', 'bor_usr_id', 'bor_total_books', 'bor_date', 'bor_back_date', 'bor_status', 'bor_fine'];
}
