<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay_fines extends Model
{
    protected $table	= 'Pay_fines';
    protected $primaryKey = 'pay_id';
    protected $fillable	= ['pay_id', 'pay_borrow_id', 'pay_fine'];
}
