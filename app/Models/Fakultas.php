<?php

namespace App\Models;

use App\Models\Kementerian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'm_fakultas';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function ormawa(){
        return $this->hasMany(Kementerian::class);
    }
}
