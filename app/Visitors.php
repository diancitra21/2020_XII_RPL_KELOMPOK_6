<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Visitors extends Model
{
	use SoftDeletes;
     protected $table	= 'Visitors';
    protected $primaryKey = 'vst_id';
    protected $fillable	= ['vst_id', 'vst_position_id', 'vst_purpose_id', 'vst_date'];
}
