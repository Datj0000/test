<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'txHash', 'amount', 'tran_form', 'tran_to'
    ];
    protected $primaryKey = 'recharge_id';
 	protected $table = 'tbl_recharge';
    use HasFactory;
}
