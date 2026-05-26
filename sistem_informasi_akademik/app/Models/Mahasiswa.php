<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'mahasiswa'; 

    protected $fillable = ['nim', 'nama', 'jurusan', 'dosen_id'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}