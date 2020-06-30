<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wawancara extends Model
{
    protected $table = "wawancara";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
