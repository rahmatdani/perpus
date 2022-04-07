<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ="role_id";
    public $fillable = ['role','ket'];
    
    public function User()
    {
    	return $this->hasOne('App\Models\User');
    }
}
