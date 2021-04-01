<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    protected $table	= 'collections';
    protected $primaryKey = 'col_id';
    protected $fillable	= ['col_id', 'col_rack'];
}
