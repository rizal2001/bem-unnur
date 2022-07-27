<?php

namespace App\Models;

use App\Models\Misi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabinet extends Model
{
    protected $table = 'm_kabinet';
    protected $primaryKey = 'id';
    protected $guarded = [];
    use HasFactory;
    
    public function misi(){
        return $this->hasMany(Misi::class);
    }
}
