<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    protected $table = "fitur";
    protected $fillable = ['judul', 'is_active'];
}
