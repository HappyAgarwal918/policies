<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'address';

    protected $fillable = ['seller_company_name','seller_address','seller_zip','seller_country'];

    public $timestamps = false;
}
