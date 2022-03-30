<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
//    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_name',
        'customer_email',
        'customer_phone',
        'customer_username',
        'customer_pass',
        'customer_image',
        'customer_token',
        'customer_balance',
        'customer_role'
    ];
    protected $table = 'tbl_customer';
}
