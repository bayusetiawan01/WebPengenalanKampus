<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiWawancara extends Model
{
    protected $table = "nilaiwawancara";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
