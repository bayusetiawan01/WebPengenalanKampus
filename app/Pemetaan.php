<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemetaan extends Model
{
    protected $table = "pemetaan";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
