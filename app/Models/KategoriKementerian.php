<?php

namespace App\Models;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKementerian extends Model
{
    protected $table = 'm_kategori_kementerian';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function jabatan(){
        return $this->hasMany(Jabatan::class);
    }
}
