<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'package',
        'status',
    	'created_at',
    ];
 	protected $table = 'tbl_buypackage';
}
