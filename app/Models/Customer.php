<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer';
    protected $fillable = [
    	'customer_name', 'customer_email', 'customer_pass','customer_phone','customer_username','customer_image', 'customer_balance'
    ];
}
