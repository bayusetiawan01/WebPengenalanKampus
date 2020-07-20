<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = "pengumuman";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
