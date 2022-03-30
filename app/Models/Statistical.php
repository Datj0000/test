<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistical extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'statistical_time', 'statistical_quality'
    ];
    protected $primaryKey = 'statistical_id';
 	protected $table = 'tbl_statistical';
    use HasFactory;
}
