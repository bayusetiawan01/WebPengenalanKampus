<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filetugas extends Model
{
    protected $table = "file_tugas";
    protected $fillable = ['user_npm', 'tugas_id', 'file'];
}
