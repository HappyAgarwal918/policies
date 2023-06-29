<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stripe extends Model
{
	protected $table = 'stripe';
    
    protected $fillable = ['key_type','values'];

    public $timestamps = false;
}
