<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Fakultas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kementerian extends Model
{
    protected $table = 't_kementerian';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }
}
