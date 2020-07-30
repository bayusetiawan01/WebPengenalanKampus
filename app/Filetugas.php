<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filetugas extends Model
{
    protected $table = "file_tugas";
    protected $guarded = ['id', 'updated_at'];
    protected $dates = ['created_at'];
    public function tugas()
    {
        return $this->belongsTo('App\Tugas');
    }
}
