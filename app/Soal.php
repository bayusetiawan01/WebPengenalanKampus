<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = "soal";
    protected $fillable = ['soal', 'kuis_id', 'tipe_soal', 'jawaban', 'pilihan'];
}
