<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Without extends Model
{
    use HasFactory;
    protected $table = 'tbl_without';
    protected $fillable = [
    	'customer_id', 'without_account', 'without_amount', 'created_at'
    ];
}
