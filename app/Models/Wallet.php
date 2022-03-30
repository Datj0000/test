<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'wallet_banlance', 'created_at'
    ];
    protected $primaryKey = 'wallet_id';
 	protected $table = 'tbl_wallet';
    use HasFactory;
}
