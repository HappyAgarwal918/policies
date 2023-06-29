<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class lifetime_deal extends Model
{
    //
    protected $table = 'lifetime-deal';
   
    protected $fillable = ['email'];

    public $timestamps = false;
}
