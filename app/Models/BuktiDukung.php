<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiDukung extends Model
{
    use HasFactory;

    protected $casts = [
        'nama_file' => 'array',
        'original_filename' => 'array'
    ];
    protected $table = 'bukti_dukung';
    protected $with = ['matriks'];
    protected $guarded = ['id'];

    public function matriks(){
        return $this->belongsTo(Matriks::class);
    }

    // public function evaluasiPegawai(){
    //     return $this
    // }
}
