<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPackage extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'created_at'
    ];
    protected $primaryKey = 'buypackage_id';
 	protected $table = 'tbl_buypackage';
    use HasFactory;
}
