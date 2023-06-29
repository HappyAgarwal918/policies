<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class img extends Model
{
	protected $table = 'logo';
    
    protected $fillable = ['featured_image'];

    public $timestamps = false;
}
