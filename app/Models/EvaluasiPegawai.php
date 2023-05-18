<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiPegawai extends Model
{
    use HasFactory;

    protected $table = 'evaluasi_pegawai';
    protected $guarded = ['id'];
    protected $with = 'hasilKerja';

    public function matriks(){
        return $this->belongsTo(Matriks::class);
    }

    public function hasilKerja(){
        return $this->belongsTo(HasilKerja::class);
    }
}
