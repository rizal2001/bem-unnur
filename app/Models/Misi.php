<?php

namespace App\Models;

use App\Models\Kabinet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Misi extends Model
{
    protected $table = 't_misi';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kabinet(){
        return $this->belongsTo(Kabinet::class);
    }
    
}
