<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table	= 'Users';
    protected $primaryKey = 'usr_id';
    protected $guarded	= [''];
}
