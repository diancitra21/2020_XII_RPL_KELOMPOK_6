<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table	= 'Positions';
    protected $primaryKey = 'pst_id';
    protected $fillable	= ['pst_id', 'pst_jabatan'];

}
