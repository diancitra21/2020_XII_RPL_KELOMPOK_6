<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purposes extends Model
{
     protected $table	= 'Purposes';
    protected $primaryKey = 'pps_id';
    protected $fillable	= ['pps', 'pps_tujuan'];
}
