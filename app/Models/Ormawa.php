<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $table = 't_ormawa';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kategoriOrmawa(){
        return $this->belongsTo('App\Models\KategoriOrmawa');
    }
}