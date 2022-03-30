<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistical extends Model
{
    use HasFactory;
    protected $fillable = [
    	'statistical_time', 'statistical_quality'
    ];
 	protected $table = 'tbl_statistical';
}
