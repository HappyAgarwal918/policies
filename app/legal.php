<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class legal extends Model
{
    //
    protected $table = 'legal';

    protected $fillable = ['legal','slug'];
   
    public $timestamps = false;
}
