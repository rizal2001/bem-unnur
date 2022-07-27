<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kementerian extends Model
{
    protected $table = 't_kementerian';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo('App\Models\Jabatan');
    }

    public function fakultas(){
        return $this->belongsTo('App\Models\Kementerian');
    }
}
