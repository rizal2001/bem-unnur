<?php

namespace App\Models;

use App\Models\Background;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    protected $table = 'm_halaman';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function background(){
        return $this->hasMany(Background::class);
    }

}
