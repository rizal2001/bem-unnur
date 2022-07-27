<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriOrmawa extends Model
{
    protected $table = 'm_kategori_ormawa';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function ormawa(){
        return $this->hasMany('App\Models\Ormawa');
    }
}
