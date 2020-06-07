<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $fillable = ['nama', 'npm', 'image', 'email', 'password', 'role_id', 'is_active'];
}
