<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Multitenantable;

class Matriks extends Model
{
    use HasFactory;
    use Multitenantable;
    protected $guarded = ['id'];
    protected $with = ['sasaranAtasan'];

    public function indikator(){
        return $this->hasMany(IndikatorKeberhasilan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sasaranAtasan(){
        return $this->belongsTo(Matriks::class, 'sasaranAtasan_id');
    }

    public function realisasiBuktiDukung(){
        return $this->hasMany(RealisasiBuktiDukung::class);
    }

    public function buktiDukung(){
        return $this->hasMany(BuktiDukung::class);
    }

    public function evaluasiPegawai(){
        return $this->hasOne(EvaluasiPegawai::class);
    }

}
