<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'created_at'
    ];
    protected $primaryKey = 'attendance_id';
 	protected $table = 'tbl_attendance';
    use HasFactory;
}
