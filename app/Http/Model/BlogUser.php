<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class BlogUser extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'ID';
    public $timestamps = false;
}
