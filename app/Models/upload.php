<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table = "uploads";
    public $fillable = ['user_id','gambar'];

    public function User()
    {
        return $this-belongsTo(User::class, 'user_id', 'id');
    }

}


