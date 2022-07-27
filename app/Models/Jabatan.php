<?php

namespace App\Models;

use App\models\Kementerian;
use App\Models\KategoriKementerian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 't_jabatan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kementerian(){
        return $this->hasMany(Kementerian::class);
    }

    public function kategoriKementerian(){
        return $this->belongsTo(KategoriKementerian::class);
    }
}
