<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
