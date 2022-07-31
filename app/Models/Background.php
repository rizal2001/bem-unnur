<?php

namespace App\Models;

use App\Models\Halaman;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $table = 't_background';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function halaman(){
        return $this->belongsTo(Halaman::class);
    }
}
