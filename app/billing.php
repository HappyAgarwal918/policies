<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
    //
    protected $table = 'billing';

    protected $fillable = ['billunique','first_name','last_name','company','address','city','zip','c_id','s_id','phone','email','invoice_id'];

    public $timestamps = false;
}
