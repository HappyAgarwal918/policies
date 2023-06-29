<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class custom_clause extends Model
{
    //
    protected $table = 'custom-clause';
   
    protected $fillable = ['title','text','unique_id'];

    public $timestamps = false;
}
