<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    use HasFactory;
    protected $fillable = [
    	'customer_id', 'txHash', 'amount', 'tran_form', 'tran_to'
    ];
 	protected $table = 'tbl_recharge';
}
