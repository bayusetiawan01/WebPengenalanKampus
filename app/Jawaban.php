<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawaban";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
