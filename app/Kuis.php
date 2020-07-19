<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $table = "kuis";
    protected $fillable = ['judul', 'deadline', 'deskripsi'];
}
