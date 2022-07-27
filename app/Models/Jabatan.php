<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 't_jabatan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kementerian(){
        return $this->hasMany('App\Models\Kementerian');
    }

    public function kategoriKementerian(){
        return $this->belongsTo('App\Models\KategoriKementerian');
    }
}
