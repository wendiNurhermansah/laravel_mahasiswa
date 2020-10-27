<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['id', 'n_mapel', 'id_jurusan', 'created_at', 'updated_at'];
}
