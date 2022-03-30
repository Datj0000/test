<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Without extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'without_accout', 'without_amount', 'without_status', 'created_at'
    ];
    protected $primaryKey = 'without_id';
 	protected $table = 'tbl_without';
    use HasFactory;
}
