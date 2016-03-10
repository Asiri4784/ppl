<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	use Authenticatable, CanResetPassword;
	protected $table = 'admin';
	protected $fillable = ['id','username','fullname','birthdate', 'address','email','created_at','updated_at','role','sex','mobile_phone','password'];
	protected $hidden = ['password', 'remember_token'];
	protected $primaryKey = 'id';
	public $timestamps=true;

	public function getAuthIdentifier()
    {
        return $this->username; //should be changed to
        return $this->id;
    }
}
?>