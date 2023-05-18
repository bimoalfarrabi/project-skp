<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKerja extends Model
{
    use HasFactory;
    protected $table = 'hasil_kerja';
    protected $guarded = ['id'];
    
    public function evaluasiPegawai(){
        return $this->hasMany(EvaluasiPegawai::class);
    }
}
