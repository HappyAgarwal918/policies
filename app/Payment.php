<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	 protected $table = 'payments';
	 
    protected $fillable = ['payunique','payment_id','payer_email','amount','currency','payment_status'];

	 public $timestamps = false;
}
