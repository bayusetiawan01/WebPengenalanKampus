<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = "tugas";
    protected $fillable = ['judul', 'deadline', 'deskripsi', 'petunjuk'];
    public function file_tugas()
    {
        return $this->hasMany('App\Filetugas');
    }
}
