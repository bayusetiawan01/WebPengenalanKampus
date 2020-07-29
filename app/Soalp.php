<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soalp extends Model
{
    protected $table = "soalp";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
