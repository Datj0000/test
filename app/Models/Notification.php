<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'notification_status', 'notification_amount', 'customer_id', 'created_at'
    ];
    protected $primaryKey = 'notification_id';
 	protected $table = 'tbl_notification';
    use HasFactory;
}
