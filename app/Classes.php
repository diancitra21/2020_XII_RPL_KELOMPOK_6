<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table	= 'classes';
    protected $primaryKey = 'class_id';
    protected $fillable	= ['class_id', 'tingkatan'];
}
