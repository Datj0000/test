<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'admin_email', 'admin_password', 'admin_name','admin_username', 'admin_token', 'admin_image'
    ];
 	public function getAuthPassword(){
 		return $this->admin_password;
 	}
}
