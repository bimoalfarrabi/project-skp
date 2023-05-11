<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiPegawai extends Model
{
    use HasFactory;

    protected $table = 'evaluasi_pegawai';
    protected $guarded = 'id';
    public function hasilKerja(){
        return $this->belongsTo(HasilKerja::class);
    }
}
