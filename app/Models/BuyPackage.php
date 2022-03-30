<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPackage extends Model
{
    use HasFactory;
    protected $fillable = [
    	'created_at'
    ];
 	protected $table = 'tbl_buypackage';
}
