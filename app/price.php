<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
	protected $table = 'price';
    
    protected $fillable = ['policy','price','deal_price'];

    public $timestamps = false;
}
