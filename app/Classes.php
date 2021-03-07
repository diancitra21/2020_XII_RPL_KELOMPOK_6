<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table	= 'classes';
    protected $primaryKey = 'cls_id';
    protected $fillable	= ['cls_id', 'cls_tingkatan'];
}
