<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'wallet_address', 'wallet_balance'
    ];
    protected $primaryKey = 'setting_id';
 	protected $table = 'tbl_setting';
    use HasFactory;
}
