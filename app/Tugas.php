<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = "tugas";
    protected $guarded = ['id', 'updated_at'];
    protected $dates = ['created_at'];
    public function file_tugas()
    {
        return $this->hasMany('App\Filetugas');
    }
}
