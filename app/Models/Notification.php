<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
    	'notification_status', 'notification_amount', 'customer_id', 'created_at'
    ];
 	protected $table = 'tbl_notification';
}
